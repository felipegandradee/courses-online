<?php
	//Inicializando a sessão
	session_start();

	//inportando a conexão de um arquivo externo
	//include_once("conexao.php");

	//Ler as tabelas
		//Criando a query
		$result_tabela = "SHOW TABLES";

		//Executando a query
		$resultado_tabela = mysqli_query($conn, $result_tabela);

		//lendo o resultado
		while ($row_tabela = mysqli_fetch_row($resultado_tabela)) {
			$tabelas[] = $row_tabela[0]; //posição q está o nome da tabela
		}
		//var_dump($tabelas); //Exibe o nome de todas as tabelas em array

			$result = "";
			//lendo o array tabela
			foreach ($tabelas as $tabela) {
				//echo $tabela . "<br>";//Exibe o nome de cada uma das tabelas

				//Pesquisar o nome das colunas
					//Criando a query
					$result_colunas = "SELECT * FROM " . $tabela;

					//Executando a query
					$resultado_colunas = mysqli_query($conn, $result_colunas);

					//Verificando quantas colunas cada tabela possui
					$num_colunas = mysqli_num_fields($resultado_colunas);
					//echo $tabela . " --- " . $num_colunas ."<br>"; //Exibe a qtde de cada coluna da tabela 

				//Criar a instrução para apagar a tabela caso a mesma exista
				$result .= 'DROP TABLE IF EXISTS ' . $tabela . ';';
				
				//Pesquisar como a coluna é criada	
					//Criando a query
					$result_cr_col = "SHOW CREATE TABLE " . $tabela;

					//Executando a query
					$resultado_cd_col = mysqli_query($conn, $result_cr_col);

					//Lendo o resultado
					$row_cr_col = mysqli_fetch_row($resultado_cd_col);
					//var_dump($row_cr_col); //Exibindo a estrutura de cada tabela
					
					$result .= "\n\n".$row_cr_col[1] . ";\n\n";// pegando a instrução da tabela(sua estrutura)


				//Incluindo o insert
					//For para percorrer o array de colunas
					for ($i=0; $i < $num_colunas; $i++) { 
						//Ler o valor de cada coluna no banco de dados
						while ($row_tp_col = mysqli_fetch_row($resultado_colunas)) {
							//var_dump($row_tp_col);
							//Criar a instrução da Query para inserir os dados
							$result .= 'INSERT INTO '. $tabela . ' VALUES (';

								//Ler os dados da tabela
								for ($j=0; $j < $num_colunas; $j++) { 
									//função addslashes - Adiciona barras invertidas a uma String
									$row_tp_col[$j] = addslashes($row_tp_col[$j]);

									//função str_replace - Substituir todas as ocorrências da string \n pela \\n
									$row_tp_col[$j] = str_replace("\n", "\\n", $row_tp_col[$j]);

									if (isset($row_tp_col[$j])) {
										if (!empty($row_tp_col[$j])) {
											$result .= '"' . $row_tp_col[$j] . '"';
										} else{
											$result .= 'NULL';											
										}

										
									} else {
										$result .= 'NULL';
									}

									//inserindo as virgulas no Insert
									if($j < ($num_colunas - 1)){
										$result .= ',';
									}
								} 
								$result .= ");\n";
						}
					}
					$result .= "\n\n";

			}
			//echo $result;

//Criar o diretório de backup
$diretorio = 'backup/';
//verificando se este diretório não existe
if (!is_dir($diretorio)) {
	//criando
	mkdir($diretorio, 0777, true);
	//permitindo a edição
	chmod($diretorio, 0777);
}

//Nome do arquivo de backup
$data = date('Y-m-d-h-i-s');
$nome_arquivo = $diretorio . "db_backup_" . $data;

//abrindo o arquivo para fazer a escrita nele
$handle = fopen($nome_arquivo.'.sql', 'w+');
//Realizando a escrita
fwrite($handle, $result);
//fechando o arquivo
fclose($handle);

//Montar o link do arquivo
$download = $nome_arquivo . ".sql";

//Adicionar o header para download
	//verificando se o arquivo existe
	if (file_exists($download)) {
		header("Pragma: public");
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private", false);
		header("Content-Type: application/force-download");
		header("Content-Disposition: attachment; filename=\"" . basename($download) . "\";");
		header("Content-Transfer-Encoding: binary");
		header("Content-Length: " . filesize($download));
		readfile($download);
		$_SESSION['msg'] = "<span style='color: green'>Exportado BD com sucesso</span>";
	} else {
		$_SESSION['msg'] = "<span style='color: red'>Erro ao exportar o BD</span>";
	}



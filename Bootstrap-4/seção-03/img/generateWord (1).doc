                 <!-- ARQUIVO QUE GERA WORD SEM OS BOTÕES DO FORMULARIO (WORD E IMPRESSÃO) -->


                 {lang_get var="labels" s='error_id,specific_requirement,issue, test_status_failed,test_status_blocked,test_status_warning,test_status_passed,test_status_not_run,test_status_analise,test_status_nao_aplicavel,test_status_aprovado_restricao'}
                <html>
                    <head>
                        <meta charset="UTF-8">
                        <title>Caso de testes</title>
                        <!--<link rel="stylesheet" type="text/css" href= "../../gui/themes/default/css/ReportTheme.css">-->
                        <style type="text/css">
                            body {
                                font-family: "Arial Narrow";
                                background-color: #fafafa;
                                -webkit-print-color-adjust: exact;
                            }
                            .column{
                                color: #FFFFFF;
                                background: #5E5E5E;
                            }

                            tr{
                                break-inside: avoid;
                            }

                            td{
                                break-inside: avoid;
                                border: 1px solid;
                                border-color: #000;
                            }
                            @media print { 
                                #noprint { display:none; } 
                                body { background: #fff; }
                            }

                        </style>
                    </head>
                    <body>
                        <span>
                            {$cover}
                            {$soluntion_data}
                        </span>  
                        {foreach item=stat key=namestat from=$gui}
                            <div align="center" class="PageTitle" style="color: #000033">
                                    {if $namestat eq $labels.test_status_failed}
                                        <h1 align="center" style="background-color: #F5A9A9">{$namestat}</h1>
                                    {elseif $namestat eq $labels.test_status_warning}
                                        <h1  align="center" style="background-color: #ffff99">{$namestat}</h1>
                                    {elseif $namestat eq $labels.test_status_blocked}
                                        <h1 align="center" style="background-color: #3366cc">{$namestat}</h1>
                                    {elseif $namestat eq $labels.test_status_passed}
                                        <h1 align="center" style="background-color: #81F770">{$namestat}</h1>
                                    {elseif $namestat eq $labels.test_status_not_run}
                                        <h1 align="center" style="background-color: #b3b3b3">{$namestat}</h1>
                                    {elseif $namestat eq $labels.test_status_analise}
                                        <h1 align="center" style="background-color: #ff9900">{$namestat}</h1>
                                    {elseif $namestat eq $labels.test_status_nao_aplicavel}
                                        <h1 align="center" style="background-color: #e6e6e6">{$namestat}</h1>
                                    {elseif $namestat eq $labels.test_status_aprovado_restricao}
                                        <h1 align="center" style="background-color: #ffcc99">{$namestat}</h1>                                               
                                    {/if}       
                            </div>
                            {foreach item=value from=$stat}
                                <div class="General" style="/*page-break-after: always*/">
                                    <table width ="100%" height="10%" > <!-- 1°)primeira tabela com os blocos ID DO ERRO E REQUISISTOS ESPECIFICOS -->
                                            <tr class="column" >
                                                <td width="30%" class="context" ><b>{$labels.error_id}</b></td>
                                                <td width="65%" class="context"><b>{$labels.specific_requirement}</b></td>
                                            </tr>
                                        {foreach item=name key=chave from=$value['names']}
                                            <tr >
                                                <td width="30%" class="describe">  <!-- formato original da tabela -->
                                                    <br>
                                                    {$name} <!--Id do erro-->
                                                </td>  <!-- formato original da tabela --> 

                                                <td width="65%" class="describe"> <!-- Tabela 2.1 bloco reserva -->
                                                    <br> 
                                                    {$value['expected_results'][$chave]} <!-- Requisito especifico do teste -->     
                                                </td>
                                            </tr>
                                        {/foreach}
                                    </table> <!-- 2°) Fim tabela de descrição dos erros -->
                                    <table width='100%' height='10%' > <!-- 3°) Tabela de incosistencias -->
                                        <tr width="1em" >
                                            {if $namestat eq $labels.test_status_failed}
                                                <td style="background-color:#F5A9A9 "><b>{$labels.issue}</b></td> <!-- bloco unico de incosistencia -->
                                            {elseif $namestat eq $labels.test_status_warning} 
                                                <td style="background-color: #ffff99"><b>{$labels.issue}</b></td> <!-- bloco unico de incosistencia -->
                                            {elseif $namestat eq $labels.test_status_blocked} 
                                                <td style="background-color: #3366cc"><b>{$labels.issue}</b></td> <!-- bloco unico de incosistencia -->
                                            {elseif $namestat eq $labels.test_status_passed} 
                                                <td style="background-color: #81F770"><b>{$labels.issue}</b></td> <!-- bloco unico de incosistencia -->                                      
                                            {elseif $namestat eq $labels.test_status_not_run} 
                                                <td style="background-color: #b3b3b3"><b>{$labels.issue}</b></td> <!-- bloco unico de incosistencia -->                                                       
                                            {elseif $namestat eq $labels.test_status_analise} 
                                                <td style="background-color: #ff9900"><b>{$labels.issue}</b></td> <!-- bloco unico de incosistencia -->                                      
                                            {elseif $namestat eq $labels.test_status_nao_aplicavel} 
                                                <td style="background-color: #e6e6e6"><b>{$labels.issue}</b></td> <!-- bloco unico de incosistencia -->                                                       
                                            {elseif $namestat eq $labels.test_status_aprovado_restricao} 
                                                <td style="background-color: #ffcc99"><b>{$labels.issue}</b></td> <!-- bloco unico de incosistencia -->                                                                              
                                            {else}
                                                <td class="inconsist"><b>{$labels.issue}</b></td> <!-- bloco unico de incosistencia -->
                                                {/if}
                                        </tr>
                                        <tr >
                                            <td class='inconsistDescription'>
                                                {$value.text_description}
                                            </td>
                                        </tr>    
                                    </table> <!-- 3°) Fim da tabela de incosistencias -->
                                    <br>
                                </div>
                            {/foreach}
                        {/foreach}
                    </body>
                </html>

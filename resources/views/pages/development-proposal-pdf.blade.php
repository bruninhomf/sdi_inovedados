<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Proposta de desenvolvimento</title>
</head>
<body>
<div>
  <div>
    <div>
      <div>
        <div style="height: 50px; padding-top: 160px; padding-bottom: 170px; text-align: center">
          <img src="images/logo/inovedados.jpg" alt="Inove Dados" width="250px">
        </div>
        <table style="border-spacing: 0; margin-top: 10px">
          <tr>
            <td colspan="2" style="background-color: #be575e; height: 57px;"></td>
          </tr>
          <tr>
            <td style="background-color: #be575e; height: 280px;"></td>
            <td rowspan="2" style="background-color: #891629; color: white; width: 670px; padding: 40px; font-size: 50px; font-family: Calibri, 'Trebuchet MS', 'Gill Sans', sans-serif">
              PROPOSTA
              <h1 style="font-size: 80px; font-family: Arial, Helvetica, sans-serif;">COMERCIAL</h1>
              <table style="padding: 20px 0px 20px 0px; color: white;font-family: Arial, Helvetica, sans-serif; font-size: 26px;">
                <tr>
                  <td>Nomo do projeto: {{ $developmentproposal->project }}</td>
                </tr>
                <tr>
                  <td>Versão: {{ $developmentproposal->version }}</td>
                </tr>
                <tr>
                  <td>Data: {{ date('d/m/Y', strtotime($developmentproposal->date)) }}</td>
                </tr>
              </table>
              <table style="padding: 20px 0px 20px 0px; color: white; font-family: Arial, Helvetica, sans-serif">
                <tr>
                  <td style="background-color: white; position:absolute; width: 130px; height: 10px;"></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td style="color: white; padding-left: 145px; padding-top: 20px; text-align: right; white-space: nowrap;">
                    <div><h4>contato@inovedados.com.br</h4> <img src="images/icon/email_white.png" style="width: 12px; margin-left: 7px"></div>
                    <div><h4>+55 (31) 4042-2999 </h4> <img src="images/icon/phone_white.png" style="width: 7px; margin-left: 6px"></div>
                    <div style="border: 1px solid #891629"><h4>Rua dos Guajajaras, 910, Sala 1619 </h4> <img src="images/icon/address_white.png" style="margin-left: 4px"></div>
                    <div><h4>inovedados </h4> <img src="images/icon/skype_white.png" style="width: 10px; margin-left: 5px"></div>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td style="background-color: #262b2c;">
              <svg height="200" width="120" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g transform="scale(4)">
                  <text x="58" y="-40" fill="white" transform="rotate(-90 80,20)" style="font-family: Arial, Helvetica, sans-serif">
                    {{ date('Y') }}
                  </text>
                </g>
              </svg>
            </td>
          </tr>
        </table>

        <div style="height: 690px; padding: 40px 70px 0px 70px;">
          <table style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
            <tr>
              <td style="background-color: #ff002b; position:absolute; width: 8px; height: 80px;"></td>
              <td style="padding-left: 15px;">
                <h1 style="color: #404040">Solução para o seu negócio</h1>
              </td>
            </tr>
            <tr>
              <td></td>
              <td style="padding-left: 15px; color: #7f7f7f">
                <h3>Aperfeiçoar o fluxo legislativo de Câmaras Municipais</h3>
              </td>
            </tr>
            <tr>
              <td></td>
              <td style="padding-left: 15px;padding-top: 25px; color: #595959; text-align: justify; line-height: 32px;">
                <p>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                  {{ $developmentproposal->business_solution_one }}
                </p>
                <p>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                  {{ $developmentproposal->business_solution_two }}</p>
                <p>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                  {{ $developmentproposal->business_solution_three }}</p>
              </td>
            </tr>
          </table>
        </div>
        <div style="text-align: center">
          <img src="images/cards/business.png">
        </div>
        <div style="padding: 0px 75px 0px 75px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
          <table style="padding: 43px 0px 0px 0px; color: #7f7f7f; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
            <tr>
              <td style="padding-left: -20px; text-align: left;">
                <img src="images/logo/logo_inove.png" alt="Inove Dados" style="width: 120px">
              </td>
              <td style="padding-left: 280px; text-align: right; white-space: nowrap; border: 1px solid white">
                <div>contato@inovedados.com.br <img src="images/icon/email.png" style="width: 10px; margin-left: 4px"></div>
                <div>+55 (31) 4042-2999 <img src="images/icon/fone.png" style="width: 10px; margin-left: 4px"></div>
                <div style="border: 1px solid white">Rua dos Guajajaras, 910, Sala 1619 <img src="images/icon/end.png" style="width: 10px; margin-left: 4px"></div>
                <div>inovedados <img src="images/icon/skype.png" style="width: 10px; margin-left: 4px"></div>
              </td>
            </tr>
          </table>          
          <div style="padding-top: 15px">
            <div style="background-color: #da0c1f; width: 100%; height: 6px;"></div>
          </div>
        </div>

        {{-- Página 3 --}}
        <div style="height: 900px; padding: 40px 70px 0px 70px;">
          <table style="margin-bottom: 80px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
            <tr>
              <td style="background-color: #ff002b; position:absolute; width: 8px; height: 80px;"></td>
              <td style="padding-left: 15px;">
                <h1 style="color: #404040">Documentação do seu projeto</h1>
              </td>
            </tr>
            <tr>
              <td></td>
              <td style="padding-left: 15px; color: #7f7f7f">
                <h3>Planejamento, desenvolvimento e resultados</h3>
              </td>
            </tr>
          </table>
          <div style="border-radius: 30px; padding: 12px; box-shadow:0 0px 20px 0 rgba(0,0,0,3.0)">
            <table style="margin: 30px 10px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
              <tr>
                <td style="color: #5E5E5E">
                  <h3>Levantamento de requisitos</h3>
                </td>
                <td><img src="images/cards/cloud.png"></td>
              </tr>
              <tr>
                <td style="padding-top: 20px; color: #595959; text-align: justify; line-height: 25px;">
                  Informações detalhadas em formato de requisitos para documentar
                  todas as funcionalidades necessárias para o sucesso do projeto.
                </td>
              </tr>
            </table>
          </div>
          <div style="margin: auto; width: 40%;">
            <div style="background-color: #ff002b; border-radius: 50px; padding: 10px; text-align: center; margin-top: 70px; margin-bottom: 70px">
              <a style="text-decoration: none; color: white" href="{{ $developmentproposal->requirements }}">Faça o download aqui</a>
            </div>
          </div>
          <div style="text-align: center">
            <img width="430px" src="images/cards/requirement.png">
          </div>
        </div>
        <div style="padding: 0px 75px 0px 75px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
          <table style="padding: 43px 0px 0px 0px; color: #7f7f7f; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
            <tr>
              <td style="padding-left: -20px; text-align: left;">
                <img src="images/logo/logo_inove.png" alt="Inove Dados" style="width: 120px">
              </td>
              <td style="padding-left: 280px; text-align: right; white-space: nowrap; border: 1px solid white">
                <div>contato@inovedados.com.br <img src="images/icon/email.png" style="width: 10px; margin-left: 4px"></div>
                <div>+55 (31) 4042-2999 <img src="images/icon/fone.png" style="width: 10px; margin-left: 4px"></div>
                <div style="border: 1px solid white">Rua dos Guajajaras, 910, Sala 1619 <img src="images/icon/end.png" style="width: 10px; margin-left: 4px"></div>
                <div>inovedados <img src="images/icon/skype.png" style="width: 10px; margin-left: 4px"></div>
              </td>
            </tr>
          </table>          
          <div style="padding-top: 15px">
            <div style="background-color: #da0c1f; width: 100%; height: 6px;"></div>
          </div>
        </div>

        {{-- Página 4 --}}
        <div style="height: 900px; padding: 40px 70px 0px 70px;">
          <table style="padding-bottom: 50px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
            <tr>
              <td style="background-color: #ff002b; position:absolute; width: 8px; height: 80px;"></td>
              <td style="padding-left: 15px;">
                <h1 style="color: #404040">Evolução do seu projeto</h1>
              </td>
            </tr>
            <tr>
              <td></td>
              <td style="padding-left: 15px; color: #7f7f7f">
                <h3>Acompanhe seu cronograma com todas as etapas</h3>
              </td>
            </tr>
          </table>
          <div style="border-radius: 30px; box-shadow:0px 0px 20px 0px rgba(0,0,0,3.0); padding: 15px;">
            <div style="margin: 30px 10px;">
              <table style="padding-bottom: 10px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
                <tr>
                  <td>
                    <img src="images/cards/development.png">
                  </td>
                  <td style="padding-left: 15px; width: 350px; color: #595959">
                    <h4>Início do desenvolvimento</h4>
                  </td>
                  <td style="color: #595959">
                    <h4>de {{ date('d/m', strtotime($developmentproposal->start_development)) }} a {{ date('d/m', strtotime($developmentproposal->texting_release)) }}</h4>
                  </td>
                </tr>
              </table>
              <div style="background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,0), rgba(255,0,0,0), rgba(255,0,0,0), rgba(255,0,0,1)); width: 100%; height: 8px; border-radius: 20px;"></div>
              <table style="padding-top: 50px; padding-bottom: 10px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
                <tr>
                  <td>
                    <img src="images/cards/test.png">
                  </td>
                  <td style="padding-left: 15px; width: 350px; color: #595959">
                    <h4>Liberação do ambiente de testes</h4>
                  </td>
                  <td style="color: #595959">
                    <h4>de {{ date('d/m', strtotime($developmentproposal->texting_release)) }} a {{ date('d/m', strtotime($developmentproposal->start_test)) }}</h4>
                  </td>
                </tr>
              </table>
              <div style="background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,0), rgba(255,0,0,1)); width: 100%; height: 8px; border-radius: 20px;"></div>
              <table style="padding-top: 50px; padding-bottom: 10px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
                <tr>
                  <td>
                    <img src="images/cards/start-test.png">
                  </td>
                  <td style="padding-left: 15px; width: 350px; color: #595959">
                    <h4>Início dos testes</h4>
                  </td>
                  <td style="color: #595959">
                    <h4>de {{ date('d/m', strtotime($developmentproposal->start_test)) }} a {{ date('d/m', strtotime($developmentproposal->homologation)) }}</h4>
                  </td>
                </tr>
              </table>
              <div style="background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1)); width: 90%; height: 8px; border-radius: 20px;"></div>
              <table style="padding-top: 50px; padding-bottom: 10px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
                <tr>
                  <td>
                    <img src="images/cards/release.png">
                  </td>
                  <td style="padding-left: 15px; color: #595959; width: 350px;">
                    <h4>Liberação para homologação</h4>
                  </td>
                  <td style="color: #595959">
                    <h4>de {{ date('d/m', strtotime($developmentproposal->homologation)) }} a 07/12</h4>
                  </td>
                </tr>
              </table>
              <div style="background-color: #ff002b; width: 100%; height: 8px; border-radius: 20px;"></div>
            </div>
          </div>
          <div style="padding-left: 4px; padding-top: 40px; text-align: center;">
            <img src="images/cards/timeline.png" style="width: 650px">
          </div>
          <table style="padding-left: 5px">
            <tr>
              <td style="width: 183px;">{{ date('d/m', strtotime($developmentproposal->start_development)) }}</td>
              <td style="width: 86px;">{{ date('d/m', strtotime($developmentproposal->texting_release)) }}</td>
              <td style="width: 170px;">{{ date('d/m', strtotime($developmentproposal->start_test)) }}</td>
              <td style="width: 160px;">{{ date('d/m', strtotime($developmentproposal->homologation)) }}</td>
              <td>{{ date('d/m', strtotime($developmentproposal->homologation)) }}</td>
            </tr>
          </table>
        </div>
        <div style="padding: 0px 75px 0px 75px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
          <table style="padding: 43px 0px 0px 0px; color: #7f7f7f; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
            <tr>
              <td style="padding-left: -20px; text-align: left;">
                <img src="images/logo/logo_inove.png" alt="Inove Dados" style="width: 120px">
              </td>
              <td style="padding-left: 280px; text-align: right; white-space: nowrap; border: 1px solid white">
                <div>contato@inovedados.com.br <img src="images/icon/email.png" style="width: 10px; margin-left: 4px"></div>
                <div>+55 (31) 4042-2999 <img src="images/icon/fone.png" style="width: 10px; margin-left: 4px"></div>
                <div style="border: 1px solid white">Rua dos Guajajaras, 910, Sala 1619 <img src="images/icon/end.png" style="width: 10px; margin-left: 4px"></div>
                <div>inovedados <img src="images/icon/skype.png" style="width: 10px; margin-left: 4px"></div>
              </td>
            </tr>
          </table>          
          <div style="padding-top: 15px">
            <div style="background-color: #da0c1f; width: 100%; height: 6px;"></div>
          </div>
        </div>

        {{-- Página 5 --}}
        <div style="height: 900px; padding: 40px 70px 0px 70px;">
          <table style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
            <tr>
              <td style="background-color: #ff002b; position:absolute; width: 8px; height: 80px;"></td>
              <td style="padding-left: 15px;">
                <h1 style="color: #404040">Investimento</h1>
              </td>
            </tr>
            <tr>
              <td></td>
              <td style="padding-left: 15px; color: #7f7f7f">
                <h3>Valor de investimento para concretizar seu projeto</h3>
              </td>
            </tr>
          </table>
          <table style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; padding-top: 50px">
            <tr>
              <td></td>
              <td style="padding-left: 15px;">
                <h3 style="color: #404040">A/C: {{ $developmentproposal->contact_name }}</h3>
              </td>
            </tr>
          </table>
          <table style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; padding-top: 50px">
            <tr>
              <td></td>
              <td style="padding-left: 15px; padding-bottom: 20px">
                <h3 style="color: #404040">Dados da proposta:</h3>
              </td>
            </tr>
            <tr>
              <td></td>
              <td style="padding-left: 15px; padding-bottom: 15px">
                <h3 style="color: #404040">Cliente: {{ $developmentproposal->contact_name }} ({{ $developmentproposal->client }})</h3>
              </td>
            </tr>
            <tr>
              <td></td>
              <td style="padding-left: 15px; padding-bottom: 20px; color: #595959; line-height: 20px;">
                Endereço: {{ $developmentproposal->address }}
                <br> Telefone: {{ $developmentproposal->phone }}
                <br> CNPJ: {{ $developmentproposal->cnpj }}
              </td>
            </tr>
            <tr>
              <td></td>
              <td style="padding-left: 15px; padding-bottom: 15px">
                <h3 style="color: #404040">Fornecedor: Inove Dados</h3>
              </td>
            </tr>
            <tr>
              <td></td>
              <td style="padding-left: 15px; color: #595959; line-height: 20px;">
                Endereço: Rua dos Guajajaras, no 910, sala 1619, 30.180-100 - Belo Horizonte/MG
                <br> Telefone: (31) 4042-2999
                <br> CNPJ: 21.529.996/0001-05
              </td>
            </tr>
          </table>
          <div style="border: 2px solid #891629; border-radius: 50px; margin: 40px 20px 0px 20px; padding: 12px;">
            <table style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;line-height: 22px; margin: 25px 0px 25px 0px">
              <tr>
                <td colspan="2" style="padding-bottom: 20px;">
                  <span style="display: inline-block; color: #891629; font-size: 25px;">Valor total: 
                    <span style="color: #404040;">
                      {{ $developmentproposal->amount }}
                    </span>
                  </span> 
                </td>
              </tr>
              <tr>
                <td style="width: 600px">
                  <span style="color: #7f7f7f">
                    Formas de pagamento: 
                    <span style="color: #404040;">
                      {{ $developmentproposal->first_payment }}
                    </span>
                  </span>
                </td>
                <td rowspan="2" style="vertical-align: bottom; text-align: right">
                  <img src="images/cards/code.png"></td>
              </tr>
              <tr>
                <td>
                  <span style="color: #7f7f7f">
                    Proposta válida até: 
                    <span style="color: #404040;">
                      {{ date('d/m/Y', strtotime($developmentproposal->first_payment_date)) }}
                    </span>
                  </span>
                </td>
              </tr>
            </table>
          </div>
        </div>
        <div style="padding: 0px 75px 0px 75px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
          <table style="padding: 43px 0px 0px 0px; color: #7f7f7f; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
            <tr>
              <td style="padding-left: -20px; text-align: left;">
                <img src="images/logo/logo_inove.png" alt="Inove Dados" style="width: 120px">
              </td>
              <td style="padding-left: 280px; text-align: right; white-space: nowrap; border: 1px solid white">
                <div>contato@inovedados.com.br <img src="images/icon/email.png" style="width: 10px; margin-left: 4px"></div>
                <div>+55 (31) 4042-2999 <img src="images/icon/fone.png" style="width: 10px; margin-left: 4px"></div>
                <div style="border: 1px solid white">Rua dos Guajajaras, 910, Sala 1619 <img src="images/icon/end.png" style="width: 10px; margin-left: 4px"></div>
                <div>inovedados <img src="images/icon/skype.png" style="width: 10px; margin-left: 4px"></div>
              </td>
            </tr>
          </table>          
          <div style="padding-top: 15px">
            <div style="background-color: #da0c1f; width: 100%; height: 6px;"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>



<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Proposta de consultoria</title>
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
                  <td>Nomo do projeto: {{ $consultingproposal->project }}</td>
                </tr>
                <tr>
                  <td>Versão: {{ $consultingproposal->version }}</td>
                </tr>
                <tr>
                  <td>Data: {{ $consultingproposal->date }}</td>
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

        {{-- Página 2 --}}
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
                <h3>Aperfeiçoar o fluxo do seu negócio</h3>
              </td>
            </tr>
            <tr>
              <td></td>
              <td style="padding-left: 15px;padding-top: 25px; color: #595959; text-align: justify; line-height: 32px;">
                <p>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                  {{ $consultingproposal->business_solution_one }}
                </p>
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
                <h3 style="color: #404040">A/C: {{ $consultingproposal->contact_name }}</h3>
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
                <h3 style="color: #404040">Cliente: {{ $consultingproposal->contact_name }} ({{ $consultingproposal->client }})</h3>
              </td>
            </tr>
            <tr>
              <td></td>
              <td style="padding-left: 15px; padding-bottom: 20px; color: #595959; line-height: 20px;">
                Endereço: {{ $consultingproposal->address }}
                <br> Telefone: {{ $consultingproposal->phone }}
                <br> CNPJ: {{ $consultingproposal->cnpj }}
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
                      {{ $consultingproposal->amount }}
                    </span>
                  </span> 
                </td>
              </tr>
              <tr>
                <td style="width: 600px">
                  <span style="color: #7f7f7f">
                    Formas de pagamento: 
                    <span style="color: #404040;">
                      {{ $consultingproposal->first_payment }}
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
                      {{ $consultingproposal->first_payment_date }}
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



<html>
<head>
<title>Page Title</title>
</head>
<body>
<div>
  <div>
    <div>
      <div>
        <div style="height: 50px; padding-top: 160px; padding-bottom: 202px; text-align: center">
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
              <h1 style="font-size: 80px; font-family: Arial, Helvetica, sans-serif;">TÉCNICA</h1>
              <table style="padding: 20px 0px 20px 0px; color: white;font-family: Arial, Helvetica, sans-serif; font-size: 26px;">
                <tr>
                  <td style="padding: 25px 0px 25px 0px;">
                    Servidor Virtual
                  </td>
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
        <div style="padding: 40px 70px 0px 70px">
          <img width="100%" src="images/table_storage.png"> 
          <table cellspacing="0" style="width: 100%; color: #595959; text-align: justify; line-height: 25px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
            <tbody>
              <tr style="background-color: #f6f6f6;">
                <td style="padding-left: 10px;">Processador</td>
                <td style="padding-left: 200px;">{{ $virtualproposal->cpu }}</td>
              </tr>
              <tr style="background-color: #dbdcdd">
                <td style="padding-left: 10px">Memoria</td>
                <td style="padding-left: 200px">{{ $virtualproposal->memory }}</td>
              </tr>
              <tr style="background-color: #f6f6f6">
                <td style="padding-left: 10px">Rede</td>
                <td style="padding-left: 200px">{{ $virtualproposal->network }}</td>
              </tr>
              <tr style="background-color: #dbdcdd">
                <td style="padding-left: 10px">Sistema operacional</td>
                <td style="padding-left: 200px">{{ $virtualproposal->system }}</td>
              </tr>
              <tr style="background-color: #f6f6f6">
                <td style="padding-left: 10px">IP</td>
                <td style="padding-left: 200px">{{ $virtualproposal->ip }}</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div style="padding: 20px 75px 0px 75px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
          <p>Localização: Data Center Park Falkenstein, Alemanha.</p>
          <div>
            <h6>
              Valor: R$ {{ $virtualproposal->value }} mensais
              <br>
              Validade da proposta: 15 (quinze) dias a contar de: {{ date('d/m/Y') }}.
            </h6>
          </div>
          <div>
            <p>
              Orientações gerais:
            </p>
            <ul>
              <li style="padding-top: 10px">
                O procedimento de armazenamento de Backup não é garantido e o servidor de armazenamento não deve
                ser utilizado como única forma de Backup. O CLIENTE deve concordar em manter em local seguro o seu
                próprio Backup.
              </li>
              <li style="padding-top: 15px">
                Nosso suporte não inclui alterações nos dados armazenados. É válido apenas para o correto funcionamento
                do servidor de armazenamento, dúvidas e orientações gerais.
              </li>
            </ul>
          </div>
          <table style="padding: 400px 0px 0px 0px; color: #7f7f7f; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
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



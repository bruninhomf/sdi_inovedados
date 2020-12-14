<html>
<head>
<title>Page Title</title>
<style>
  
</style>
</head>
<body>
<div>
  <div>
    <div>
      <div>
        <div style="height: 50px; padding-top: 120px; padding-bottom: 150px; text-align: center">
          <img src="images/logo/inovedados.jpg" alt="Inove Dados" width="250px">
        </div>
        <table style="border-spacing: 0; margin: 10px 0px">
          <tr>
            <td colspan="2" style="background-color: #be575e; height: 57px;"></td>
          </tr>
          <tr>
            <td style="background-color: #be575e; height: 280px;"></td>
            <td rowspan="2" style="background-color: #891629; color: white; width: 600px; padding: 40px;">
              <h1 style="font-size: 50px;">PROPOSTA</h1>
              <h1 style="font-size: 90px; font-family: Arial, Helvetica, sans-serif;">TÉCNICA</h1>
            
              <table>
                <tr>
                  <td style="padding: 25px 0px 25px 0px;">
                    <h2>Servidor Virtual</h2>
                  </td>
                </tr>
                <tr>
                  <td style="background-color: white; position:absolute; width: 130px; height: 10px;"></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td style="color: white; padding-left: 60px; padding-top: 70px; text-align: right; white-space: nowrap;">
                    <div><h4>contato@inovedados.com.br</h4> <img src="images/icon/email_white.png" style="width: 12px; margin-left: 7px"></div>
                    <div><h4>+55 (31) 4042-2999 </h4> <img src="images/icon/phone_white.png" style="width: 7px; margin-left: 6px"></div>
                    <div><h4>Rua dos Guajajaras, 910, Sala 1619 </h4> <img src="images/icon/address_white.png" style="margin-left: 4px"></div>
                    <div><h4>inovedados </h4> <img src="images/icon/skype_white.png" style="width: 10px; margin-left: 5px"></div>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td style="background-color: #262b2c; color: white; font-size: 50px; height: 230px; -webkit-transform: rotate(-90.0deg);">{{ date('Y') }}</td>
          </tr>
        </table>
        <div style="padding-top: 20px">          
          <img width="100%" src="images/table_storage.png" alt=""> 
          <table style="width: 100%">
            <tbody>
              <tr style="background-color: #f6f6f6;">
                <td style="padding-left: 10px">Processador:</td>
                <td style="padding-left: 10px">{{ $virtualproposal->cpu }}</td>
              </tr>
              <tr style="background-color: #dbdcdd">
                <td style="padding-left: 10px">Memoria:</td>
                <td style="padding-left: 10px">{{ $virtualproposal->memory }}</td>
              </tr>
              <tr style="background-color: #f6f6f6">
                <td style="padding-left: 10px">Rede:</td>
                <td style="padding-left: 10px">{{ $virtualproposal->network }}</td>
              </tr>
              <tr style="background-color: #dbdcdd">
                <td style="padding-left: 10px">Sistema operacional:</td>
                <td style="padding-left: 10px">{{ $virtualproposal->system }}</td>
              </tr>
              <tr style="background-color: #f6f6f6">
                <td style="padding-left: 10px">IP:</td>
                <td style="padding-left: 10px">{{ $virtualproposal->ip }}</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div style="padding: 25px">
          <p>Localização: Data Center Park Falkenstein, Alemanha.</p>
          <div >
            <h6>
              Valor: R$ {{ $virtualproposal->value }}
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
          <table style="padding: 365px 0px 0px 0px">
            <tr>
              <td style="padding-left: -20px; text-align: left;">
                <img src="images/logo/logo_inove.png" alt="Inove Dados" style="width: 120px">
              </td>
              <td style="padding-left: 280px; text-align: right; white-space: nowrap; border: 1px solid white">
                <div>contato@inovedados.com.br <img src="images/icon/email.png" style="width: 10px; margin-left: 4px"></div>
                <div>+55 (31) 4042-2999 <img src="images/icon/fone.png" style="width: 10px; margin-left: 4px"></div>
                <div style="border: 1px solid white">Rua dos Guajajaras, 910, Sala 1619 <img src="images/icon/end.png" style="width: 10px; margin-left: 4px"></div>
                <div>inovedados <img src="images/icon/skype.png" style="width: 11px; margin-left: 4px"></div>
              </td>
            </tr>
          </table>          
          <div >
            <div style="background-color: #891629; width: 100%; height: 10px;"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>



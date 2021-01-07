<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Levantamento de requisitos</title>
<style>
  tr:nth-child(even) {
    background-color: #ebebeb;
  }
  </style>
</head>
<body>
<div>
  <div>
    <div>
      <div>
        <div style="height: 50px; padding-top: 191px; padding-bottom: 192px; text-align: center">
          <img src="images/logo/inovedados.jpg" alt="Inove Dados" width="250px">
        </div>
        <table style="border-spacing: 0; margin: 10px 0px 0px 20px ">
          <tr>
            <td colspan="2" style="background-color: #be575e; width: 653px; height: 70px;"></td>
          </tr>
          <tr>
            <td style="background-color: #be575e; width: 60px; height: 30px;"></td>
            <td rowspan="2" style="background-color: #891629; color: white; width: 713px; padding: 40px; padding-top: 62px; font-size: 50px; font-family: Calibri, 'Trebuchet MS', 'Gill Sans', sans-serif">
              LEVANTAMENTO
              <h1 style="font-size: 50px; font-family: Arial, Helvetica, sans-serif;"><b>DE REQUISITOS</b></h1>
              <table style="padding: 40px 0px 20px 0px; color: white;font-family: Arial, Helvetica, sans-serif; font-size: 26px;">
                <tr>
                  <td>
                    <div>
                      LR: 
                      {{ $requirementsgatherings->lr_id }}
                    </div>
                    <div>
                      Nome do projeto: 
                      {{ $requirementsgatherings->project_name }}</div>
                    <div>
                      Versão: 
                      {{ $requirementsgatherings->version }}
                    </div>
                    <div>
                      Data: 
                      {{ date('d/m/Y', strtotime($requirementsgatherings->created_at)) }}
                    </div>
                  </td>
                </tr>
              </table>
              <table style="padding: 20px 0px 20px 0px; color: white; font-family: Arial, Helvetica, sans-serif">
                <tr>
                  <td style="background-color: white; position:absolute; width: 50px; height: 15px;"></td>
                </tr>
              </table>
            </td>
          </tr>
        </table>

          @foreach($requirementsgatherings->titles as $key => $titles)
          <div style="height: 900px; padding: 40px 35px 0px 35px;">
            <table style="border-spacing: 0; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; width: 100%; padding-bottom: 50px">
              <thead>
                <tr>
                  <th colspan="2" style="text-transform: uppercase; font-size: 22px; padding: 10px; background-color: #262b2c; color: white; height: 50px;">
                    <span>
                      <img src="images/icon/system.png" width="25px" style="padding-right: 10px; margin-bottom: -5px">
                    </span>
                    {{ $titles->titles }}
                  </th>
                </tr>
              </thead>
              @foreach($titles->menu()->withCount('description')->get() as $key => $menu)
                <tr>
                  <td rowspan="{{ $menu->description_count }}" style="width: 200px; text-align: center; background-color: #d6d6d6; border: 1px solid white">{{ $menu->menu }}</td>
                  @foreach($menu->description as $key => $description)
                  <td style="padding: 10px; text-align: justify;">
                    {{ $description->description }}
                  </td>
                </tr>
                <tr>
                  @endforeach
                </tr>
              @endforeach
            </table>
          </div>
          <div style="padding: 0px 75px 0px 75px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
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
          @endforeach

      </div>
    </div>
  </div>
</div>

</body>
</html>



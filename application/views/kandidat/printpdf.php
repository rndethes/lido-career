<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laporan Member</title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    * {
      font-family: sans-serif;
      margin-top: 2px;
    }

    h5 {
      color: #444;
    }

    .table1 {
      font-family: sans-serif;
      color: #444;
      font-size: 11px;
      border-collapse: collapse;
      width: 100%;
      border: 1px solid #f2f5f7;
    }

    .table1 tr th {
      color: #444;
      font-weight: normal;
    }

    .table1,
    th,
    td {
      padding: 8px 10px;
      text-align: left;
    }

    p {
      font-size: 12px;
    }

    .table1,
    th,
    .no {
      padding-right: 0px;
    }

    .table1 tr:hover {
      background-color: #f5f5f5;
    }

    .table1 tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .line-title {
      border-top: 1px solid #444;
    }
  </style>

</head>

<body>

  <table style="width: 100%;">
    <!-- "/assets/etheslogo.jpg" -->
    <tr>
      <td><img src="../assets/img/img-landing/logo_lido.png" style="margin-left:30px; width: 80px; height: auto; margin-top: 20px;"></td>

      <td>
        <span style="margin-right:20px;font-size: 15px;line-height: 1.6; font-weight: bold;">
          <br>CV. Lido Grosir
        </span>
        <br>
        <span style="font-size: 13px">Krajan 1 Kandangan, 001/007, Krajan, Kandangan, Temanggung Regency, Central Java 56281</span>
      </td>
    </tr>
  </table>

  <hr class="line-title">
  <p align="center">
    <?= $ket ?> <br>
  </p>
  <table class="table1">
    <tr>
      <th>No</th>
      <th>ID Member</th>
      <th>Nama Member</th>
      <th>Alamat Member</th>
      <th>Type</th>
      <th>ID Store</th>
      <th>Status</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($member as $mb) : ?>
      <tr>
        <th scope="no">
          <?= $i; ?>
        </th>
        <td class="media-body">
          <?= $mb['id_member']; ?>
        </td>
        <td>
          <div>
            <?= $mb['member_name']; ?>
          </div>
        </td>
        <td>
          <div>
            <?= $mb['member_address']; ?>
          </div>
        </td>
        <?php if ($mb['member_type'] == '1') { ?>
          <td>
            Reguler
          </td>
        <?php } else if ($mb['member_type'] == '2') { ?>
          <td>
            Premium
          </td>
        <?php } else { ?>
          <td>
            Platinum
          </td>
        <?php } ?>
        <td>
          <div>
            <?= $mb['code_store']; ?>
          </div>
        </td>
        <?php if ($mb['status'] == '1') { ?>
          <td>
            <?= $mb['name_status']; ?>
          </td>
        <?php } else if ($mb['status'] == '2') { ?>
          <td>
            <?= $mb['name_status']; ?>
          </td>
        <?php } else if ($mb['status'] == '3') { ?>
          <td>
            <?= $mb['name_status']; ?>
          </td>
        <?php } else { ?>
          <td>
            <?= $mb['name_status']; ?>
          </td>
        <?php } ?>
      </tr>
      <?php $i++ ?>
    <?php endforeach; ?>
  </table>

</body>

</html>
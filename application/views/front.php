<!DOCTYPE html>

<html>

<head>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.css" rel="stylesheet" />

    <style type="text/css">
    .table {font-size: 1.4px;}
    .nav-link{ font-size: 30px;}
    .ripple-surface{ font-size: 24px;}
    .btn-primary {
    color: #fff;
    background-color: #0ebbcd;
    padding: 10px 20px;
    margin-bottom: 20px;
    box-shadow: none;
    font-size: 13px;
    border-radius: 20px;
}
td {
    font-size: 14px;
}
th {
    background-color: #333 !IMPORTANT;
    font-size: 14px;
    color: #fff;
}
a.btn.btn-info.btn-xs, button.btn.btn-danger.btn-xs {
    margin-right: 10px;
    background: #fff;
    height: 30px;
    width: 30px;
    text-align: center;
    line-height: 30px;
    padding: 0;
    font-size: 13px;
    box-shadow: none;
    color: #333;
    border: 1px solid #ddd;
}
.alert.alert-primary {
    max-width: 1310px;
    margin: 0 auto;
    padding: 10px;
    font-size: 17px;
    margin-bottom: 30px;
    background: #fff;
    border: 1px solid #eee;
    border-radius: 4px;
}
form {
    max-width: 500px;
    margin: 0 auto;
    background: #fff;
    padding: 30px;
    border: 1px solid #eee;
}
form input, textarea#description {
    border: 1px solid #eee;
    font-size: 14px;
    border-radius: 5px;
    outline: none;
}
.ripple-surface {
    font-size: 13px;
}
button.btn.btn-danger.btn-xs.ripple-surface {
  background-color:#f93154 !important;
  color:#fff;
}

.table-responsive form {
    display: flex;
    align-items: center;
    justify-content: center;
    padding:0;
    border:none;
}
.ripple-surface {
    font-size: 12px;
}
    </style>

    

    <title>Basic Crud operation </title>

</head>



<body>

    <header>

  <!-- Navbar -->

  <nav class="navbar navbar-expand-lg navbar-light bg-white">

    <div class="container-fluid">

      <button

        class="navbar-toggler"

        type="button"

        data-mdb-toggle="collapse"

        data-mdb-target="#navbarExample01"

        aria-controls="navbarExample01"

        aria-expanded="false"

        aria-label="Toggle navigation"

      >

        <i class="fas fa-bars"></i>

      </button>

      <div class="collapse navbar-collapse" id="navbarExample01">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item active">

            <a class="nav-link" aria-current="page" href="<?php echo base_url('products') ?>">Product List</a>

          </li>

          

          

        </ul>

      </div>

    </div>

  </nav>

  <!-- Navbar -->

</header>

<?php  if($this->session->flashdata('message')) {?>

    <div class="alert alert-primary" role="alert">

  <?php echo $this->session->flashdata('message')?>

</div>

<?php } ?>

<div class="container">

     <?php echo  $content; ?>

</div>

</body>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.js"></script>

</html>
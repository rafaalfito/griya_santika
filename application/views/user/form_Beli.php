<!DOCTYPE html>
<html lang="en">

<head>

    <title>perumahan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- my css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap_properti.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/custom.css') ?>">
</head>

<body>
    <div class="form_beli" style="background-color:#DEB887 ;">
        <center>
            <h1>Form Pembelian</h1>
            <form class="col-sm-6 text-center" method="post" action="<?php echo base_url() . 'order'; ?>" required="required">

                <tr>
                    <td>Nama</td>
                    <td><input name="nama" type="text" required="required" class="form-control" id="nama" value=""></td>
                </tr>
                <tr>
                    <td>No Telp</td>
                    <td><input name="notelp" type="tel" class="form-control" id="notlp" required="required"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input name="email" type="email" required="required" class="form-control" id="email"></td>
                </tr>
                <tr>
                    <td>Jumlah Di Beli</td>
                    <td><input name="dibeli" type="text" class="form-control" id="dibeli" required="required"></td>
                </tr>
                <tr>
                    <td>Type</td>
                    <th> : </th>
                    <td>
                        <input type="radio" name="pilih" value="212">Type 212
                        <input type="radio" name="pilih" value="302">Type 302
                        <input type="radio" name="pilih" value="420">Type 420
                    </td>
                </tr><br>
                <tr>
                    <td>Janji Survei</td>
                    <th> : </th>
                    <td><input type="date" name="janjian"></td>
                </tr><br>
                <tr>
                    <td>Status</td>
                    <th> : </th>
                    <td>
                        <select name="status" required="required">
                            <option value="1">Beli</option>
                            <option value="2">Survei</option>
                            <option value="3">Costumer service</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="col-sm-12 text-center"><br><br>
                        <button type="submit" class="btn btn-primary btn-kirim"><i class="fa fa-envelope-o"></i> Send message </button>
                    </td>
                </tr>
            </form>
        </center>
    </div>
</body>

</html>
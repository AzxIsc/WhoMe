<!DOCTYPE html>
<html>

<link rel="stylesheet" href="ext.css">

<script type="text/JavaScript">
        function refresh() {
            location.href = "index.php";
        }
    </script>

    <style type="text/css">
        .p{
            margin-left: 550px;
        }
    </style>

<head>
    <title>Quiz | Pemrograman WEB</title>
</head>
<body background="bckgr.jpg">
    <table class = "ctr" cellspacing = "0" cellpadding = "15px">
        <tbody>
            <tr>
                <td>
                    <h1 class="top">
                    <span class="who">Who</span>
                    <span class="me">me?</span>
                    </h1>
                    <table>
                        <tbody>
                            <tr>
                                <form action="process.php" method="post">
                                    <td>
                                        <input id="k" name="k" type="text" style="width: 250p t;" placeholder="Mau ketik apa?">
                                    </td>
                                    <td>
                                        <input type="submit" value="Submit">
                                    </td>
                                </form>
                                    <td>
                                        <input type="submit" value ="Reset" onclick=" refresh()">
                                    </td>
                                </form>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <table class="Petunjuk">
        <tr>
            <td class="Answer">
                <?php
                
                switch(strtolower($_POST['k'])){

                case "nama":
                    echo '<table class="r_n" cellspacing="0" cellpadding="15px">

                    <tr>
                        <td>
                            <b>Gunawan:</b>
                            <table>
                                <tr>
                                    <td style="color:white">
                                      Nama saya Gunawan Rio Wijaya
                                    </td>
                                </tr>
                              </table>';
                    break;
                case "umur":
                    echo '<table class="r_u" cellspacing="0" cellpadding="15px">
                    
                    <tr>
                        <td>
                            <b>Gunawan:</b>
                            <table>
                                <tr>
                                    <td style="color:white">
                                        Saya berumur 17 Tahun
                                    </td>
                                </tr>
                            </table>';
                    break;

                case "hobi":
                    echo '<table class="r_h" cellspacing="0" cellpadding="15px">
  
                    <tr>
                        <td>
                            <b>Gunawan:</b>
                            <table>
                                <tr>
                                    <td style="color:white">
                                      Hobinya nyari tau cara buat website
                                    </td>
                                </tr>
                            </table>';
                    break;

                case "alamat":
                    echo '<table class="r_a" cellspacing="0" cellpadding="15px">

                    <tr>
                        <td>
                            <b>Gunawan:</b>
                            <table>
                                <tr>
                                    <td style="color:white;">
                                      Saya tinggal di Demang Lebar Daun
                                    </td>
                                </tr>
                            </table>';
                    break;

                case "":
                    echo '<table class="r0" cellspacing="0" cellpadding="15px">
                    
                    <tr>
                        <td>
                            <b>Gunawan:</b>
                            <table>
                                <tr>
                                    <td style="color:white">
                                        Inputnya kosonggg nih
                                    </td>
                                </tr>
                            </table>';
                    break;

                default:
                    echo '<table class="r1" cellspacing="0" cellpadding="15px">

                    <tr>
                        <td>
                            <b>Gunawan:</b>
                            <table>
                                <tr>
                                    <td style="color:white">
                                      Untuk saat ini hanya bisa nama, alamat, umur & hobi.
                                    </td>
                                </tr>
                            </table>';
                    break;
                }

                ?>
            </td>
        </tr>
    </table>
</body>
</html>

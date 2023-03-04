<!DOCTYPE html>
<html>

<link rel="stylesheet" href="ext.css">

<script type="text/JavaScript">
        function refresh() {
            location.reload();
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
</body>
</html>

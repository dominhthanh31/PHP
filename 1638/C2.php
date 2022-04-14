<?php
$a = $b = $cal = $result = '';

if(!empty($_GET)) {
    if(isset($_GET['a'])) {
        $a = $_GET['a'];
    }
    if(isset($_GET['b'])) {
        $b = $_GET['b'];
    }
    if(isset($_GET['cal'])) {
        $cal = $_GET['cal'];
    }

    switch($cal) {
        case '+':
            $result = $a + $b;
        break;
        case '-':
            $result = $a - $b;
        break;
        case '*':
            $result = $a * $b;
        break;
        case '/':
            $result = $a / $b;
        break;
        case '%':
            $result = $a % $b;
        break;
    }

    if($a == '' || $b == '') {
        $result = '';
    } else {
        $result = $a.' '.$cal.' '.$b.' = '.$result;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <title>Calculator Online</title>
    <style>
        table {
            margin: auto;
            margin-top: 50px;
            background: #BBBBBB;
        }

        .pheptinh {
            background: orange;
        }

        #c {
            width: 100px;
            height: 40px;
        }

        .btn {
            width: 50px;
            height: 40px;
        }

        .calcu {
            width: 200px;
            height: 30px;
        }
    </style>
</head>

<body>
    <form method="get" id="MyForm" style="display: none;">
        <input type="text" name="a" placeholder="Enter a" value="<?=$a?>">
        <input type="text" name="b" placeholder="Enter b" value="<?=$b?>">
        <input type="text" name="cal" placeholder="Enter cal" value="<?=$cal?>">
    </form>
    <table>
        <tr>
            <td colspan="4"><input class="calcu" id="calcu" type="text" value="<?=$result?>" readonly="true"></td>
        </tr>
        <tr>
            <td><input type="button" class="btn" value="AC"></td>
            <td><input type="button" class="btn" value="+/-"></td>
            <td><input type="button" class="btn" value="%"></td>
            <td><input type="button" class="btn pheptinh" value="/"></td>
        </tr>
        <tr>
            <td><input type="button" class="btn" value="7"></td>
            <td><input type="button" class="btn" value="8"></td>
            <td><input type="button" class="btn" value="9"></td>
            <td><input type="button" class="btn pheptinh" value="*"></td>
        </tr>
        <tr>
            <td><input type="button" class="btn" value="4"></td>
            <td><input type="button" class="btn" value="5"></td>
            <td><input type="button" class="btn" value="6"></td>
            <td><input type="button" class="btn pheptinh" value="-"></td>
        </tr>
        <tr>
            <td><input type="button" class="btn" value="1"></td>
            <td><input type="button" class="btn" value="2"></td>
            <td><input type="button" class="btn" value="3"></td>
            <td><input type="button" class="btn pheptinh" value="+"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="button" class="btn" id="c" value="0"></td>
            <td><input type="button" class="btn" value="."></td>
            <td><input type="submit" class="btn pheptinh" value="="></td>
        </tr>
    </table>
<script type="text/javascript">
    var a = ''
    var b = ''
    var cal = ''

    $('input').click(function() {
        v = $(this).val()
        switch(v) {
            case '.':
            case '0':
            case '1':
            case '2':
            case '3':
            case '4':
            case '5':
            case '6':
            case '7':
            case '8':
            case '9':
                if(cal == '') {
                    a += v
                } else {
                    b += v
                }
            break;
            case '+':
            case '-':
            case '*':
            case '/':
            case '%':
                if(a != '') {
                    cal = v
                }
            break;
            case 'AC':
                a = ''
                b = ''
                cal = ''
            break;
            case '=':
                //Day du lieu len server
                $('#MyForm').submit()
            break;
        }

        $('[name=a]').val(a)
        $('[name=b]').val(b)
        $('[name=cal]').val(cal)
        $('#calcu').val(`${a} ${cal} ${b}`)
    })
</script>
</body>
</html>
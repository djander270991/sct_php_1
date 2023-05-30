<?php
$news = [
  'ryzen' => ' <a href="https://overclockers.ru/blog/Zystax/show/94322/
  cena-ryzen-5-5500-upala-nizhe-10-000-rublej-sobiraem-otlichnyj-igrovoj-kompjuter-dlya-novyh-igr">ryzen</a>',
   'Гонки' => ' <a href="https://overclockers.ru/blog/wwr222/show/94271/itogi-gonochnogo-uik-enda-27-28-maya">гонки</a>',
   'Ремонт видокарты' => '<a href="https://overclockers.ru/blog/Trinity/show/93382/
   remont-videokarty-posle-nekachestvennogo-servisa-kak-izbezhat-problem">Ремонт видеокарты</a>'
  ];
  echo '<ul>';
  foreach ( $news as $key => $value ){
    echo "<li>$value</li>";
     }
  echo '</ul>';
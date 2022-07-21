    <?php
        //echo "<pre>";
        //print_r($articlelist);
        //exit;
    ?>
    
    
    <ul>
    <?php foreach ($articlelist as $item): ?>
      <li style="font-weight:bold;font-size:22px">
            <?= $item['title'] ?>
            <br/>
            
            <?php foreach ($item['comments'] as $comments): ?>
            <p style="font-weight:normal;font-size:15px;color:blue">
                    <?= $comments['Comments'] ?>
              </p>      
            <?php endforeach; ?>
        </li>
    <?php endforeach; ?>
    </ul>

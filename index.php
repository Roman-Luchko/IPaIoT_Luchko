<!DOCTYPE html>
          <html>
                    <head>
                              <title>Sensors</title>
                              <style>
                                        body{
                                            background: #FAFAD2;      	
                                        }
                                        table{
                                            border: 3px groove black;
                                            width: 50%;
                                            margin: auto; 
                                        }
                                        td {
                                                  text-align: center; 
                                        }
                                        td{
                                            border: 3px groove black;      
                                        }
                                        .head{
                                                  background: #D8BFD8;
                                                  font-style:oblique;
                                                  font-family: cursive;
                                        }
                                        .temp{
                                                  background: #F08080;
                                        }
                                        .hum{
                                                  background: #F0E68C;
                                        }
                                        .svet{
                                                  background: #FFFACD;
                                        }
                                        .voda{
                                                  background: #AFEEEE;
                                        }
                                        td{
                                                  font-weight: bold;
                                        }
                              </style>
                    </head>
                    <body>                              
                              <table>
                                        
                                        
                                        
                                        <?php $text = file("text.txt"); ?>                                       
                                                  <th>Temperature</th>
                                                  <th>Humidity</th>
                                                  <th>Svetlo</th>
                                                  <th>Voda</th>
                                        </tr>  
                                        <?php
                                                  $res = $text[0]; 
                                                  $result = explode(" ", $res);
                                        ?>          
                                        <tr>
                                                  <td class = "temp"><?php echo $result[1]; ?></td>
                                                  <td class = "hum"><?php echo $result[3]; ?></td>
                                                  <td class = "svet">
                                                       <?php 
                                                            if($result[5] == 1){
                                                                      echo "+";
                                                            }
                                                            else{
                                                                      echo "-";
                                                            }
                                                       ?>
                                                  </td>
                                                  <td class = "voda">
                                                       <?php 
                                                            if($result[7] == 0){
                                                                      echo "-";
                                                            }
                                                            else{
                                                                      echo "+";
                                                            }
                                                       ?>
                                                  </td>
                                        </tr>
                                        
                                        
                                                                             
                                        <?php $text = file("text.txt"); ?>
                                        <tr class = "head">
                                                  <th>Temperature</th>
                                                  <th>Humidity</th>
                                                  <th>Svetlo</th>
                                                  <th>Voda</th>
                                        </tr>  
                                        <?php
                                                  $res = $text[1]; 
                                                  $result = explode(" ", $res);
                                                  //print_r($result);
                                        ?>          
                                        <tr>
                                                  <td class = "temp"><?php echo $result[1]; ?></td>
                                                  <td class = "hum"><?php echo $result[3]; ?></td>
                                                  <td class = "svet">
                                                       <?php 
                                                            if($result[5] == 1){
                                                                      echo "+";
                                                            }
                                                            else{
                                                                      echo "-";
                                                            }
                                                       ?>
                                                  </td>
                                                  <td class = "voda">
                                                       <?php 
                                                            if($result[7] == 0){
                                                                      echo "-";
                                                            }
                                                            else{
                                                                      echo "+";
                                                            }
                                                       ?>
                                                  </td>
                                        </tr>
                                        
                                        
                                                                             
                                        <?php $text = file("text.txt"); ?>
                                        <tr class = "head">
                                                  <th>Temperature</th>
                                                  <th>Humidity</th>
                                                  <th>Svetlo</th>
                                                  <th>Voda</th>
                                        </tr>  
                                        <?php
                                                  $res = $text[2]; 
                                                  $result = explode(" ", $res);
                                                  
                                        ?>          
                                        <tr>
                                                  <td class = "temp"><?php echo $result[1]; ?></td>
                                                  <td class = "hum"><?php echo $result[3]; ?></td>
                                                  <td class = "svet">
                                                       <?php 
                                                            if($result[5] == 1){
                                                                      echo "+";
                                                            }
                                                            else{
                                                                      echo "-";
                                                            }
                                                       ?>
                                                  </td>
                                                  <td class = "voda">
                                                       <?php 
                                                            if($result[7] == 0){
                                                                      echo "-";
                                                            }
                                                            else{
                                                                      echo "+";
                                                            }
                                                       ?>
                                                  </td>
                                        </tr>
                                        
                                        
                                                                             
                                        <?php $text = file("text.txt"); ?>
                                        <tr class = "head">
                                                  <th>Temperature</th>
                                                  <th>Humidity</th>
                                                  <th>Svetlo</th>
                                                  <th>Voda</th>
                                        </tr>  
                                        <?php
                                                  $res = $text[3]; 
                                                  $result = explode(" ", $res);
                                                  //print_r($result);
                                        ?>          
                                        <tr>
                                                  <td class = "temp"><?php echo $result[1]; ?></td>
                                                  <td class = "hum"><?php echo $result[3]; ?></td>
                                                  <td class = "svet">
                                                       <?php 
                                                            if($result[5] == 1){
                                                                      echo "+";
                                                            }
                                                            else{
                                                                      echo "-";
                                                            }
                                                       ?>
                                                  </td>
                                                  <td class = "voda">
                                                       <?php 
                                                            if($result[7] == 0){
                                                                      echo "-";
                                                            }
                                                            else{
                                                                      echo "+";
                                                            }
                                                       ?>
                                                  </td>
                                        </tr>
                                        
                                        
                                                                             
                                        <?php $text = file("text.txt"); ?>
                                        <tr class = "head">
                                                  <th>Temperature</th>
                                                  <th>Humidity</th>
                                                  <th>Svetlo</th>
                                                  <th>Voda</th>
                                        </tr>  
                                        <?php
                                                  $res = $text[4]; 
                                                  $result = explode(" ", $res);
                                                  //print_r($result);
                                        ?>          
                                        <tr>
                                                  <td class = "temp"><?php echo $result[1]; ?></td>
                                                  <td class = "hum"><?php echo $result[3]; ?></td>
                                                  <td class = "svet">
                                                       <?php 
                                                            if($result[5] == 1){
                                                                      echo "+";
                                                            }
                                                            else{
                                                                      echo "-";
                                                            }
                                                       ?>
                                                  </td>
                                                  <td class = "voda">
                                                       <?php 
                                                            if($result[7] == 0){
                                                                      echo "-";
                                                            }
                                                            else{
                                                                      echo "+";
                                                            }
                                                       ?>
                                                  </td>
                                        </tr>
                                        
                                        
                                                                             
                                        <?php $text = file("text.txt"); ?>
                                        <tr class = "head">
                                                  <th>Temperature</th>
                                                  <th>Humidity</th>
                                                  <th>Svetlo</th>
                                                  <th>Voda</th>
                                        </tr>  
                                        <?php
                                                  $res = $text[5]; 
                                                  $result = explode(" ", $res);
                                                  //print_r($result);
                                        ?>          
                                        <tr>
                                                  <td class = "temp"><?php echo $result[1]; ?></td>
                                                  <td class = "hum"><?php echo $result[3]; ?></td>
                                                  <td class = "svet">
                                                       <?php 
                                                            if($result[5] == 1){
                                                                      echo "+";
                                                            }
                                                            else{
                                                                      echo "-";
                                                            }
                                                       ?>
                                                  </td>
                                                  <td class = "voda">
                                                       <?php 
                                                            if($result[7] == 0){
                                                                      echo "-";
                                                            }
                                                            else{
                                                                      echo "+";
                                                            }
                                                       ?>
                                                  </td>
                                        </tr>
                                        
                                       
                                                                             
                                        <?php $text = file("text.txt"); ?>
                                        <tr class = "head">
                                                  <th>Temperature</th>
                                                  <th>Humidity</th>
                                                  <th>Svetlo</th>
                                                  <th>Voda</th>
                                        </tr>  
                                        <?php
                                                  $res = $text[6]; 
                                                  $result = explode(" ", $res);
                                                  //print_r($result);
                                        ?>          
                                        <tr>
                                                  <td class = "temp"><?php echo $result[1]; ?></td>
                                                  <td class = "hum"><?php echo $result[3]; ?></td>
                                                  <td class = "svet">
                                                       <?php 
                                                            if($result[5] == 1){
                                                                      echo "+";
                                                            }
                                                            else{
                                                                      echo "-";
                                                            }
                                                       ?>
                                                  </td>
                                                  <td class = "voda">
                                                       <?php 
                                                            if($result[7] == 0){
                                                                      echo "-";
                                                            }
                                                            else{
                                                                      echo "+";
                                                            }
                                                       ?>
                                                  </td>
                                        </tr>
                                        
                                        
                                                                             
                                        <?php $text = file("text.txt"); ?>
                                        <tr class = "head">
                                                  <th>Temperature</th>
                                                  <th>Humidity</th>
                                                  <th>Svetlo</th>
                                                  <th>Voda</th>
                                        </tr>  
                                        <?php
                                                  $res = $text[7]; 
                                                  $result = explode(" ", $res);
                                                  //print_r($result);
                                        ?>          
                                        <tr>
                                                  <td class = "temp"><?php echo $result[1]; ?></td>
                                                  <td class = "hum"><?php echo $result[3]; ?></td>
                                                  <td class = "svet">
                                                       <?php 
                                                            if($result[5] == 1){
                                                                      echo "+";
                                                            }
                                                            else{
                                                                      echo "-";
                                                            }
                                                       ?>
                                                  </td>
                                                  <td class = "voda">
                                                       <?php 
                                                            if($result[7] == 0){
                                                                      echo "-";
                                                            }
                                                            else{
                                                                      echo "+";
                                                            }
                                                       ?>
                                                  </td>
                                        </tr>
                                        
                                        
                                                                             
                                        <?php $text = file("text.txt"); ?>
                                        <tr class = "head">
                                                  <th>Temperature</th>
                                                  <th>Humidity</th>
                                                  <th>Svetlo</th>
                                                  <th>Voda</th>
                                        </tr>  
                                        <?php
                                                  $res = $text[8]; 
                                                  $result = explode(" ", $res);
                                                  //print_r($result);
                                        ?>          
                                        <tr>
                                                  <td class = "temp"><?php echo $result[1]; ?></td>
                                                  <td class = "hum"><?php echo $result[3]; ?></td>
                                                  <td class = "svet">
                                                       <?php 
                                                            if($result[5] == 1){
                                                                      echo "+";
                                                            }
                                                            else{
                                                                      echo "-";
                                                            }
                                                       ?>
                                                  </td>
                                                  <td class = "voda">
                                                       <?php 
                                                            if($result[7] == 0){
                                                                      echo "-";
                                                            }
                                                            else{
                                                                      echo "+";
                                                            }
                                                       ?>
                                                  </td>
                                        </tr>
                                        
                                        
                                                                             
                                        <?php $text = file("text.txt"); ?>
                                        <tr class = "head">
                                                  <th>Temperature</th>
                                                  <th>Humidity</th>
                                                  <th>Svetlo</th>
                                                  <th>Voda</th>
                                        </tr>  
                                        <?php
                                                  $res = $text[9]; 
                                                  $result = explode(" ", $res);
                                                  //print_r($result);
                                        ?>          
                                        <tr>
                                                  <td class = "temp"><?php echo $result[1]; ?></td>
                                                  <td class = "hum"><?php echo $result[3]; ?></td>
                                                  <td class = "svet">
                                                       <?php 
                                                            if($result[5] == 1){
                                                                      echo "+";
                                                            }
                                                            else{
                                                                      echo "-";
                                                            }
                                                       ?>
                                                  </td>
                                                  <td class = "voda">
                                                       <?php 
                                                            if($result[7] == 0){
                                                                      echo "-";
                                                            }
                                                            else{
                                                                      echo "+";
                                                            }
                                                       ?>
                                                  </td>
                                        </tr>
                                        
                                        
                                        
                                        
                                        
                              </table>
                    </body>
                                       
          </html>

<!DOCTYPE html>
          <html>
                    <head>
                              <title>Sensors</title>
                              <style>
                                        table{
                                            border: 5px double black;      
                                        }
                                        td{
                                            border: 5px double red;      
                                        }
                                        .head{
                                                  background: yellow;
                                        }
                                        .temp{
                                                  background: #FA8072;
                                        }
                                        .hum{
                                                  background: #FFEFD5;
                                        }
                                        .svet{
                                                  background: #DAA520;
                                        }
                                        .voda{
                                                  background: #87CEEB;
                                        }
                              </style>
                    </head>
                    <body>                              
                              <table>
                                        
                                        //<-_->//                                     
                                        // riadok 1
                                        //<-_->//
                                        
                                        <?php $text = file("text.txt"); ?>
                                        //<tr class = "head">
                                                  <th>Temperature</th>
                                                  <th>Humidity</th>
                                                  <th>Svetlo</th>
                                                  <th>Voda</th>
                                        </tr>  
                                        <?php
                                                  $res = $text[0]; 
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
                                        
                                        //<-_->//                                     
                                        // riadok 2
                                        //<-_->//
                                                                             
                                        <?php $text = file("text.txt"); ?>
                                        <tr>
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
                                        
                                        //<-_->//                                     
                                        // riadok 3
                                        //<-_->//
                                                                             
                                        <?php $text = file("text.txt"); ?>
                                        <tr>
                                                  <th>Temperature</th>
                                                  <th>Humidity</th>
                                                  <th>Svetlo</th>
                                                  <th>Voda</th>
                                        </tr>  
                                        <?php
                                                  $res = $text[2]; 
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
                                        
                                        //<-_->//                                     
                                        // riadok 4
                                        //<-_->//
                                                                             
                                        <?php $text = file("text.txt"); ?>
                                        <tr>
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
                                        
                                        //<-_->//                                     
                                        // riadok 5
                                        //<-_->//
                                                                             
                                        <?php $text = file("text.txt"); ?>
                                        <tr>
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
                                        
                                        //<-_->//                                     
                                        // riadok 6
                                        //<-_->//
                                                                             
                                        <?php $text = file("text.txt"); ?>
                                        <tr>
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
                                        
                                        //<-_->//                                     
                                        // riadok 7
                                        //<-_->//
                                                                             
                                        <?php $text = file("text.txt"); ?>
                                        <tr>
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
                                        
                                        //<-_->//                                     
                                        // riadok 8
                                        //<-_->//
                                                                             
                                        <?php $text = file("text.txt"); ?>
                                        <tr>
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
                                        
                                        //<-_->//                                     
                                        // riadok 9
                                        //<-_->//
                                                                             
                                        <?php $text = file("text.txt"); ?>
                                        <tr>
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
                                        
                                        //<-_->//                                     
                                        // riadok 10
                                        //<-_->//
                                                                             
                                        <?php $text = file("text.txt"); ?>
                                        <tr>
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
                                        
                                        //<-_->//                                     
                                        // riadok 11
                                        //<-_->//
                                                                             
                                        <?php $text = file("text.txt"); ?>
                                        <tr>
                                                  <th>Temperature</th>
                                                  <th>Humidity</th>
                                                  <th>Svetlo</th>
                                                  <th>Voda</th>
                                        </tr>  
                                        <?php
                                                  $res = $text[10]; 
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
                                        
                                        //<-_->//                                     
                                        // riadok 12
                                        //<-_->//
                                                                             
                                        <?php $text = file("text.txt"); ?>
                                        <tr>
                                                  <th>Temperature</th>
                                                  <th>Humidity</th>
                                                  <th>Svetlo</th>
                                                  <th>Voda</th>
                                        </tr>  
                                        <?php
                                                  $res = $text[11]; 
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

<!DOCTYPE html>
          <html>
                    <head>
                              <title>Sensors</title>
                    </head>
                    <body>                              
                              <table background = "yellow">
                                        <?php $text = file("text.txt"); ?>
                                        <tr>
                                                  <th>Temperature</th>
                                                  <th>Humidity</th>
                                                  <th>Svetlo</th>
                                                  <th>Voda</th>
                                        </tr>  
                                        <?php
                                                  $res = $text[0]; 
                                                  $result = explode(" ", $res);
                                                  print_r($arr);
                                        ?>          
                                        <tr>
                                                  <td>hhh<?php echo "k"; ?></td>
                                                  <td>kkk<?php echo $result[1]; ?></td>
                                                  <td></td>
                                                  <td></td>
                                        </tr>
                              </table>
                    </body>
                                       
          </html>

<!DOCTYPE html>
          <html>
                    <head>
                              <title>Sensors</title>
                    </head>
                    <body>                              
                              <table background = "yellow">
                                        // -> riadok 1
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
                                                  print_r($result);
                                        ?>          
                                        <tr>
                                                  <td><?php echo $result[1]; ?></td>
                                                  <td><?php echo $result[3]; ?></td>
                                                  <td>
                                                       <?php 
                                                            if($result[5] == 1){
                                                                      echo "+";
                                                            }
                                                            else{
                                                                      echo "-";
                                                            }
                                                       ?>
                                                  </td>
                                                  <td>
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

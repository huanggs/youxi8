              <?php
                if ($ArrayEvent['Visible']==0){
                  echo '<tr class="Visible">';
                } else {
                  echo '<tr>';
                }
              ?>
              <td align="center"><?php echo $ArrayEvent['id'];?></td>
              <td align="center"><?php echo $ArrayEvent['EventDay'];?></td>
              <td align="center"><?php echo date("H:i", strtotime($ArrayEvent['EventTime']))?></td>
              <td align="center">
                  <span class="NorCtn">
                    <?php
                       $catg_id=$ArrayEvent['category'];
                       $query_catg_id=mysql_query("SELECT CatgName FROM category WHERE id=$catg_id");
                       while ($data_catg_id=mysql_fetch_array($query_catg_id)) {
                       echo $data_catg_id['CatgName'];
                      }
                    ?>
                 </span>
              </td>
              <td align="center"><?php echo $ArrayEvent['title'];?></td>
              <td align="center">
                 <?php switch ($ArrayEvent['importance']){
                   case 1:
                     echo '<button type="button" class="btn btn-danger btn-xs">万众瞩目</button>';
                     break;
                   case 2:
                     echo '<button type="button" class="btn btn-warning btn-xs">不容错过</button>';
                     break;
                   case 3:
                     echo '<button type="button" class="btn btn-info btn-xs">建议关注</button>';
                     break;
                   case 4:
                     echo '<button type="button" class="btn btn-success btn-xs">值得一看</button>';
                     break;
                   case 5:
                     echo '<button type="button" class="btn btn-primary btn-xs">不妨一看</button>';
                     break;
                   }
                 ?>
              </td>
              <td align="center"><span class="NorCtn"><?php echo $ArrayEvent['EventPlace'];?></span></td>
              <td align="center"><a href="<?php echo $ArrayEvent['OfficialSite'];?>"><button type="button" class="btn btn-info btn-xs">官网</button></a></td>
              <td align="center"><a href="<?php echo $ArrayEvent['link_2'];?>"><button type="button" class="btn btn-default btn-xs">链接</button></a></td>
              <td align="center"><a href="<?php echo $ArrayEvent['link_3'];?>"><button type="button" class="btn btn-default btn-xs">链接</button></a></td>
              <td align="center"><a href="<?php echo $ArrayEvent['link_4'];?>"><button type="button" class="btn btn-default btn-xs">链接</button></a></td>
              <td align="center"><a href="<?php echo $ArrayEvent['link_5'];?>"><button type="button" class="btn btn-default btn-xs">链接</button></a></td>
              <td align="center"><a href="edit_event.php?id=<?php echo $ArrayEvent['id'];?>"><button type="button" class="btn btn-primary btn-xs">编辑</button></a></td>
              <td align="center">
                <?php
                if ($ArrayEvent['Visible']==1){
                  echo '<a href="../inc/invisible_event.php?id='.$ArrayEvent['id'].'"><button type="button" class="btn btn-danger btn-xs">关闭</button></a>';
                } elseif ($ArrayEvent['Visible']==0){
                  echo '<a href="../inc/invisible_event.php?id='.$ArrayEvent['id'].'"><button type="button" class="btn btn-success btn-xs">打开</button>';
                }
                ?>
              </td>
            </tr>
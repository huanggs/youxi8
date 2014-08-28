            <tr>
              <td width="5%" align="center"><?=$data_content['id']?></td>
              <td width="10%" align="center"><?=$data_content['EventDay']?></td>
              <td width="5%" align="center"><?=date("H:i", strtotime($data_content['EventTime']))?></td>
              <td width="15%" align="center">
                  <span class="NorCtn">
                    <?php
                       $catg_id=$data_content['category'];
                       $query_catg_id=mysql_query("SELECT CatgName FROM category WHERE id=$catg_id");
                       while ($data_catg_id=mysql_fetch_array($query_catg_id)) {
                       echo $data_catg_id['CatgName'];
                      }
                    ?>
                 </span>
              </td>
              <td width="20%" align="center"><?=$data_content['title']?></td>
              <td width="5%" align="center">
                 <?php switch ($data_content['importance']){
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
              <td width="10%" align="center"><span class="NorCtn"><?=$data_content['EventPlace']?></span></td>
              <td width="5%" align="center"><a href="<?=$data_content['OfficialSite']?>"><button type="button" class="btn btn-info btn-xs">官网</button></a></td>
              <td width="5%" align="center"><a href="<?=$data_content['link_2']?>"><button type="button" class="btn btn-default btn-xs">链接</button></a></td>
              <td width="5%" align="center"><a href="<?=$data_content['link_3']?>"><button type="button" class="btn btn-default btn-xs">链接</button></a></td>
              <td width="5%" align="center"><a href="<?=$data_content['link_4']?>"><button type="button" class="btn btn-default btn-xs">链接</button></a></td>
              <td width="5%" align="center"><a href="<?=$data_content['link_5']?>"><button type="button" class="btn btn-default btn-xs">链接</button></a></td>
              <td width="5%" align="center"><a href="edit_event.php?id=<?=$data_content['id']?>">编辑</a></td>
            </tr>
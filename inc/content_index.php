          <tr>
            <td width="5%" align="center"><?php echo date("H:i", strtotime($data_content['EventTime']))?></td>
               <td width="15%" align="center">
                 <?php switch ($data_content['category']){
                   case '赛事':
                     echo '<button type="button" class="btn btn-danger btn-xs">'.$data_content['category'].'</button>';
                     break;
                   case '测试':
                     echo '<button type="button" class="btn btn-success btn-xs">'.$data_content['category'].'</button>';
                     break;
                   case '展会':
                     echo '<button type="button" class="btn btn-info btn-xs">'.$data_content['category'].'</button>';
                     break;
                   case '英雄联盟2014S4全球总决赛':
                     echo '<button type="button" class="btn btn-danger btn-xs">'.$data_content['category'].'</button>';
                     break;
                   }
                 ?>
               </td>
               <td width="10%" align="center"><span class="NorCtn"><?=$data_content['EventPlace']?></span></td>
               <td width="25%" align="center">
                 <?php switch ($data_content['importance']){
                   case 1:
                     echo '<strong>'.$data_content['title'].'</strong>';
                     break;
                   case 2:
                     echo '<span class="NorCtn">'.$data_content['title'].'</span>';
                     break;
                   case 3:
                     echo '<span class="NorCtn">'.$data_content['title'].'</span>';
                     break;
                   case 4:
                     echo '<span class="NorCtn">'.$data_content['title'].'</span>';
                     break;
                   case 5:
                     echo '<span class="NorCtn">'.$data_content['title'].'</span>';
                     break;
                   }
                 ?></td>
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
               <td width="5%" align="center"><a href="<?=$data_content['link_1']?>"><button type="button" class="btn btn-info btn-xs">官网</button></a></td>
               <td width="5%" align="center"><a href="<?=$data_content['link_2']?>"><button type="button" class="btn btn-default btn-xs">链接</button></a></td>
               <td width="5%" align="center"><a href="<?=$data_content['link_3']?>"><button type="button" class="btn btn-default btn-xs">链接</button></a></td>
               <td width="5%" align="center"><a href="<?=$data_content['link_4']?>"><button type="button" class="btn btn-default btn-xs">链接</button></a></td>
               <td width="5%" align="center"><a href="<?=$data_content['link_5']?>"><button type="button" class="btn btn-default btn-xs">链接</button></a></td>
               <td width="10%" align="center"><img src="images/reminder.png" width="63" height="24"></td>
            </tr>
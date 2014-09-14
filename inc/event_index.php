            <tr>
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
               <td width="10%" align="center">
                 <?php switch ($data_content['importance']){
                   case 1:
                     echo '<span class="ColorRed f-size-12">万众瞩目</span>';
                     break;
                   case 2:
                     echo '<span class="ColorOrange f-size-12">不容错过</span>';
                     break;
                   case 3:
                     echo '<span class="ColorBlue f-size-12">建议关注</span>';
                     break;
                   case 4:
                     echo '<span class="ColorGreen f-size-12">值得一看</span>';
                     break;
                   case 5:
                     echo '<span class="ColorGray f-size-12">不妨一看</span>';
                     break;
                   }
                 ?>
              </td>
               <td width="10%" align="center"><span class="NorCtn"><?php echo $data_content['EventPlace'];?></span></td>
               <td width="5%" align="center"><a href="<?php echo $data_content['OfficialSite'];?>"><button type="button" class="btn btn-info btn-xs">官网</button></a></td>
               <td width="5%" align="center"><a href="<?php echo $data_content['link_2'];?>"><button type="button" class="btn btn-default btn-xs">链接</button></a></td>
               <td width="5%" align="center"><a href="<?php echo $data_content['link_3'];?>"><button type="button" class="btn btn-default btn-xs">链接</button></a></td>
               <td width="5%" align="center"><a href="<?php echo $data_content['link_4'];?>"><button type="button" class="btn btn-default btn-xs">链接</button></a></td>
               <td width="5%" align="center"><a href="<?php echo $data_content['link_5'];?>"><button type="button" class="btn btn-default btn-xs">链接</button></a></td>
               <td width="10%" align="center">
                <script type="text/javascript">
                  var __qqClockShare = {
                     content: "【游戏吧】提醒您：<?php echo $data_content['title'];?>即将开始。",
                     time: "<?php echo $data_content['EventDay'];?> <?=date("H:i", strtotime($data_content['EventTime']))?>",
                     advance: 5,
                     url: "<?php echo $data_content['OfficialSite'];?>",
                     icon: "2_1"
                  };
                  document.write('<a href="http://qzs.qq.com/snsapp/app/bee/widget/open.htm#content=' + encodeURIComponent(__qqClockShare.content) +'&time=' + encodeURIComponent(__qqClockShare.time) +'&advance=' + __qqClockShare.advance +'&url=' + encodeURIComponent(__qqClockShare.url) + '" target="_blank"><img src="http://i.gtimg.cn/snsapp/app/bee/widget/img/' + __qqClockShare.icon + '.png" style="border:0px;"/></a>');
                </script>
               </td>
            </tr>
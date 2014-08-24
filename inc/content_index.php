		    <tr>
              <td width="10%"><button type="button" class="btn btn-xs"><?=$data_content['CreateDate']?></button></td>
		      <td width="10%">
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
				  }
			  ?>
			  </td>
		      <td width="45%" align="center"><?=$data_content['title']?></td>
		    <!--
            <td><?=$data_content['description']?></td>
            -->
		      <td width="5%">
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
				  }
			  ?>
              </td>
		      <td width="5%"><a href="<?=$data_content['link_1']?>"><button type="button" class="btn btn-success btn-xs">链接1</button></a></td>
		      <td width="5%"><a href="<?=$data_content['link_2']?>"><button type="button" class="btn btn-success btn-xs">链接2</button></a></td>
		      <td width="5%"><a href="<?=$data_content['link_3']?>"><button type="button" class="btn btn-success btn-xs">链接3</button></a></td>
		      <td width="5%"><a href="<?=$data_content['link_4']?>"><button type="button" class="btn btn-success btn-xs">链接4</button></a></td>
		      <td width="5%"><a href="<?=$data_content['link_5']?>"><button type="button" class="btn btn-success btn-xs">链接5</button></a></td>
		      <td width="5%"><img src="images/reminder.png" width="63" height="24"></td>
          </tr>
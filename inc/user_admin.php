        <tr>
          <td align="center"><?php echo $RowUser['id'];?></td>
          <td align="center"><?php echo $RowUser['UserName'];?></td>
          <td align="center">
            <?php
              switch ($RowUser['UserGroup']){
              	case 'admin':
                echo "管理员";
                break;
                case 'info':
                echo "信息录入员";
                break;
                case 'user':
                echo "普通用户";
                break;
              }
           ?>
          </td>
          <td align="center"><a href="edit_user.php?id=<?php echo $RowUser['id'];?>"><button type="button" class="btn btn-primary btn-xs">编辑</button></a></td>
        </tr>
            <tbody>
            <tr>
              <td align="center"><?=$RowCatg['id']?></td>
              <td align="center"><?=$RowCatg['CatgLv']?></td>
              <td align="center"><?=$RowCatg['CatgFatherId']?></td>
              <td align="left">
                <?php
                  switch ($RowCatg['CatgLv']) {
                    case '1':
                      echo "<span class=\"CatgLv1\">".$RowCatg['CatgName']."</span>";
                      break;
                    case '2':
                      echo "<span class=\"CatgLv2\">".$RowCatg['CatgName']."</span>";
                      break;
                    case '3':
                      echo "<span class=\"CatgLv3\">".$RowCatg['CatgName']."</span>";
                      break;
                  }
                ?>
              </td>
              <td align="center"><a href="edit_catg.php?id=<?=$RowCatg['id']?>"><button type="button" class="btn btn-primary btn-xs">编辑</button></a></td>
            </tr>
            </tbody>
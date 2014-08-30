            <tbody>
            <tr>
              <td width="10%" align="center"><?=$RowCatg['id']?></td>
              <td width="30%" align="left">
                <?php
                  switch ($RowCatg[CatgLv]) {
                    case '1':
                      echo "<span class=\"CatgLv1\">".$RowCatg[CatgName]."</span>";
                      break;
                    case '2':
                      echo "<span class=\"CatgLv2\">".$RowCatg[CatgName]."</span>";
                      break;
                    case '3':
                      echo "<span class=\"CatgLv3\">".$RowCatg[CatgName]."</span>";
                      break;
                  }
                ?>
              </td>
              <td width="10%" align="center"><?=$RowCatg[CatgLv]?></td>
              <td width="10%" align="center"><?=$RowCatg[CatgFatherId]?></td>
              <td width="10%" align="center"><a href="edit_catg.php?id=<?=$RowCatg[id]?>">编辑</a></td>
            </tr>
            </tbody>
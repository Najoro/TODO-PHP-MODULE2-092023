<?php 
 function displayItem($id ,$item){
    $itemEdit = get('itemEdit');
    $id = "$id";
    if($itemEdit === $id){
        return ('
        <div class="add-items">
            <form action="editItem.php?" method="POST">
                <input type="hidden" name="hiddenID" value = '.$itemEdit.'>
                <input type="text" name="resultEditItem" id="item" value ='.$item.'>
                <span class="btm-submit">
                    <button type="submit">ok</button>
                </span>
            </form>
        </div>
        ');
    }else{
    return ('
        <ul>
            <li>
                <div class = "liste-item">
                    <input type="checkbox" name="" id='.$id.'>
                    <label for="'.$id.'">'.$item.'</label>
                </div>
                <div class="button">
                    <div class="delete">
                        <a href="deletItem.php?item='.$id.'">delete</a>
                    </div>
                    <div class="edit">
                        <a href="index.php?itemEdit='.$id.'">edit</a>
                    </div>
                </div>
            </li>
        </ul>
        ');
    }

 } 
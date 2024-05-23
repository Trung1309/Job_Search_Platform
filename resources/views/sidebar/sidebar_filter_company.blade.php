<div class="content-filter-left col-md-3">
    <h4 style=" padding:10px; text-transform:uppercase; border-bottom:1px solid gray ;">Bộ lọc
    </h4>
    <form action="">
        <ul class="menu-filter">
            <li>Địa chỉ
                <ul class="sub-menu-filter">
                    @foreach ($districts as $key => $item )
                        <li><input  type="radio" name="dia_chi"> {{$item->ten_quan_huyen}}</li>
                    @endforeach
                </ul>
            </li>
            <li>Quy mô
                <ul class="sub-menu-filter">
                    <li><input type="radio" value="10-50" name="quy_mo"> 10-50</input></li>
                    <li><input type="radio" value="50-100" name="quy_mo"> 50-100</input></li>
                    <li><input type="radio" value="100-200" name="quy_mo"> 100-200</input></li>
                    <li><input type="radio" value=">200" name="quy_mo"> >200</input></li>
                </ul>
            </li>
        </ul>
        <button type="submit">Tìm kiếm</button>
    </form>
</div>

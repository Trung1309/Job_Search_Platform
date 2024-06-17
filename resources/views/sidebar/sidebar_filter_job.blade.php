<div class="content-filter-left col-md-3">
    <h4 style=" padding:10px; text-transform:uppercase; border-bottom:1px solid gray ;">Bộ lọc
    </h4>
    <form action="{{route('filterJob')}}" method="GET">
        @csrf
        <ul class="menu-filter">
            <li>Trình độ
                <ul class="sub-menu-filter-active">
                    <li><input value="" type="radio" name="id_trinh_do"> Bỏ chọn</li>
                    @foreach ($levels as $level )
                        <li><input value="{{$level->id_trinh_do}}" type="radio" name="id_trinh_do" {{isset($selectedLevelID) && $selectedLevelID == $level->id_trinh_do ? 'checked' : '' }}> {{$level->ten_trinh_do}}</li>
                    @endforeach
                </ul>
            </li>
            <li>Thể Loại
                <ul class="sub-menu-filter">
                    <li><input value="" type="radio" name="id_the_loai"> Bỏ chọn</li>
                    @foreach ($categories as $category )
                        <li><input value="{{$category->id_the_loai}}" type="radio" name="id_the_loai" {{isset($selectedCategoryID) && $selectedCategoryID == $category->id_the_loai ? 'checked' : '' }}> {{$category->ten_the_loai}}</li>
                    @endforeach
                </ul>
            </li>
            <li>Địa chỉ
                <ul class="sub-menu-filter">
                    <li><input value="" type="radio" name="id_tinh_thanh"> Bỏ chọn</li>
                    @foreach ($provinces as $province )
                        <li><input value="{{$province->id_tinh_thanh}}" type="radio" name="id_tinh_thanh" {{isset($selectedProvinceID) && $selectedProvinceID == $province->id_tinh_thanh ? 'checked':'' }}> {{$province->ten_tinh_thanh}}</li>
                    @endforeach
                </ul>
            </li>
            <li>Vị trí
                <ul class="sub-menu-filter">
                    <li><input value="" type="radio" name="id_vi_tri"> Bỏ chọn</li>
                    @foreach ($positions as $position )
                        <li><input value="{{$position->id_vi_tri}}" type="radio" name="id_vi_tri" {{isset($selectedPositionID) && $selectedPositionID == $position->id_vi_tri ? 'checked' : '' }}> {{$position->ten_vi_tri}}</li>
                    @endforeach
                </ul>
            </li>
            <li>Kinh nghiệm
                <ul class="sub-menu-filter">
                    <li><input value="" type="radio" name="id_kinh_nghiem"> Bỏ chọn</li>
                    @foreach ($experiences as $experience )
                        <li><input value="{{$experience->id_kinh_nghiem}}" type="radio" name="id_kinh_nghiem" {{isset($selectedExperienceID) && $selectedExperienceID == $experience->id_kinh_nghiem ? 'checked' : '' }}> {{$experience->so_nam}}</li>
                    @endforeach
                </ul>
            </li>
            <div class="form-group p-15">
                <label for="ky_nang" style="font-size: 20px; font-weight: 600;padding: 10px;">Kỹ Năng</label>
                <select id="skills" class="form-control" name="ky_nang[]" multiple = "multiple">
                    @foreach ($skills as $skill)
                        <option value="{{ $skill->ten_ky_nang }}" {{ in_array($skill->ten_ky_nang, request()->input('ky_nang', [])) ? 'selected' : '' }}>{{  $skill->ten_ky_nang }}</option>
                    @endforeach
                </select>
                @error('ky_nang')
                    <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
        </ul>
        <button type="submit">Tìm kiếm</button>
    </form>
</div>

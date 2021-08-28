@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">@lang('site.add_select')</div>
        <div class="card-body">

            <form action="{{ route('store') }}" method="post">
                @csrf

                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="level1_category_id">@lang('site.level1_category')</label>
                            <select name="level1_category_id" id="level1_category_id" class="form-control">
                                <option value=""> --- </option>
                                @foreach($level1categories as $level1category)
                                    <option value="{{ $level1category->id }}" {{ old('level1_category_id') == $level1category->id ? 'selected' : '' }}>{{ $level1category->name }}</option>
                                @endforeach
                            </select>
                            @error('level1_category_id')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="level2_category_id">@lang('site.level2_category')</label>
                            <select name="level2_category_id" id="level2_category_id" class="form-control">
                            </select>
                            @error('level2_category_id')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="level3_category_id">@lang('site.level3_category')</label>
                            <select name="level3_category_id" id="level3_category_id" class="form-control">
                            </select>
                            @error('level3_category_id')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" name="save" class="btn btn-primary" value="{{ __('site.add') }}">
                </div>

            </form>

        </div>
    </div>


    <div class="card mt-3">
        <div class="card-header">@lang('site.all_select')</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>@lang('site.title')</th>
                        <th>@lang('site.level1_category')</th>
                        <th>@lang('site.level2_category')</th>
                        <th>@lang('site.level3_category')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($selects as $select)
                        <tr>
                            <td>{{ $select->title }}</td>
                            <td>{{ $select->level1category->name }}</td>
                            <td>{{ $select->level2category->name }}</td>
                            <td>{{ $select->level3category->name }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="4">
                            {{ $selects->links() }}
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $(function () {
            level2categories();
            level3categories();


            $(document).on('change', '#level1_category_id', function() {
                level2categories();
                level3categories();
                return false;
            });

            $(document).on('change', '#level2_category_id', function() {
                level3categories();
                return false;
            });

            function level2categories() {
                $('option', $('#level2_category_id')).remove();
                $('#level2_category_id').append($('<option></option>').val('').html(' --- '));

                var level1categoryIdVal = $('#level1_category_id').val() != null ? $('#level1_category_id').val() : '{{ old('level1_category_id') }}';
                $.get("{{ route('get_level2categories') }}", { level1_category_id: level1categoryIdVal }, function (data) {
                    $.each(data, function(val, text) {
                        var selectedVal = val == '{{ old('level2_category_id') }}' ? "selected" : "";

                        $('#level2_category_id').append($('<option ' + selectedVal + '></option>').val(val).html(text));
                    })
                }, "json");
            }


            function level3categories() {
                $('option', $('#level3_category_id')).remove();
                $('#level3_category_id').append($('<option></option>').val('').html(' --- '));

                var level2categoryIdVal = $('#level2_category_id').val() != null ? $('#level2_category_id').val() : '{{ old('level2_category_id') }}';
                $.get("{{ route('get_level3categories') }}", { level2_category_id: level2categoryIdVal }, function (data) {
                    $.each(data, function(val, text) {
                        var selectedVal = val == '{{ old('level3_category_id') }}' ? "selected" : "";
                        $('#level3_category_id').append($('<option ' + selectedVal + '></option>').val(val).html(text));
                    })
                }, "json");
            }


        });
    </script>


@endsection


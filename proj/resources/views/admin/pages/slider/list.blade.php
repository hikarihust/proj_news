<div class="x_content">
    <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr class="headings">
                    <th class="column-title">#</th>
                    <th class="column-title">Slider Info</th>
                    <th class="column-title">Trạng thái</th>
                    <th class="column-title">Tạo mới</th>
                    <th class="column-title">Chỉnh sửa</th>
                    <th class="column-title">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @if (count($items) > 0)
                    @foreach ($items as $key => $val)
                        @php
                            $index = $key + 1;
                            $class = $index % 2 === 0 ? 'even' : 'odd';
                            $id = $val['id'];
                            $name = $val['name'];
                            $description = $val['description'];
                            $link = $val['link'];
                            $thumb = $val['thumb'];
                            $status = $val['status'];
                            $createdHistory = $val['created_by'];
                            $modifiedHistory = $val['modified_by'];
                        @endphp
                        <tr class="{{ $class }} pointer">
                            <td> {{ $index }} </td>
                            <td width="40%">
                                <p><strong>Name:</strong> {!! $name !!} </p>
                                <p><strong>Description:</strong>{!! $description !!}</p>
                                <p><strong>Link:</strong>{!! $link !!}</p>
                                <p><img src="{{ $name }}" alt="{{ $name }}" class="zvn-thumb"></p>
                            </td>
                            <td>{!! $status !!}</td>
                            <td>{!! $createdHistory !!}</td>
                            <td>{!! $modifiedHistory !!}</td>
                            <td class="last">
                                <div class="zvn-box-btn-filter"><a href="/form/1" type="button"
                                        class="btn btn-icon btn-success" data-toggle="tooltip" data-placement="top"
                                        data-original-title="Edit">
                                        <i class="fa fa-pencil"></i>
                                    </a><a href="/delete/1" type="button" class="btn btn-icon btn-danger btn-delete"
                                        data-toggle="tooltip" data-placement="top" data-original-title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    @include('admin.templates.list_empty', ['colspan' => 6])
                @endif
            </tbody>
        </table>
    </div>
</div>

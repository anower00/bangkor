

<table id="table" class="table table-striped table-bordered" style="width:100%">
    <thead class=" text-primary">
    <th>ID</th>
    <th>Title</th>
    <th>Sub Title</th>
    <th>Description</th>
    <th>Image</th>
    <th>Created At</th>
    <th>Updated At</th>
    <th>Action</th>
    </thead>
    <tbody>
    @foreach( $sliders as $key=>$slider)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $slider->title }}</td>
            <td>{{ $slider->sub_title }}</td>
            <td>{{ $slider->description }}</td>
            <td><img src="{{ asset('slider/' . $slider->image) }}" style="height: 100px; width: 200px"></td>
            <td>{{ $slider->created_at }}</td>
            <td>{{ $slider->updated_at }}</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

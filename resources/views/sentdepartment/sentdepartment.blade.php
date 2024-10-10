@extends('main.app')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Gửi thông báo theo phòng ban</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <!-- Thêm trường nhập tiêu đề -->
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input type="text" class="form-control" value="Gửi thông báo từ phòng ban" style="width: 100%;" onfocus="this.value=''">
                            </div>
                            <!-- /.form-group -->

                            <!-- Thêm trường nhập nội dung -->
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea class="form-control" rows="3" placeholder="Nhập nội dung" style="width: 100%;"></textarea>
                            </div>
                            <!-- /.form-group -->

                            <!-- Thêm trường chọn phòng/ban -->
                            <div class="form-group">
                                <label>Chọn phòng/ban</label>
                                <select class="form-control select2" style="width: 100%;" multiple data-allow-clear="true" data-placeholder="Chọn phòng/ban" data-close-on-select="false">
                                    <option></option> <!-- Thêm option rỗng để hiển thị placeholder -->
                                    <option>Phòng Ban</option>
                                    <option>Phòng B</option>
                                    <option>Phòng C</option>
                                    <option>Phòng D</option>
                                </select>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->

                        <div class="col-md-4">
                            <h3 class="card-title">Chú thích</h3>
                        </div>
                        <!-- /.col -->
                    </div>

                    <!-- Thêm nút Gửi và Hủy -->
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Gửi</button>
                            <button type="button" class="btn btn-secondary">Hủy</button>
                        </div>
                    </div>
                    <!-- /.row -->

                    <!-- Hiển thị danh sách tin nhắn đã gửi -->
                    <h3 class="mt-4">Danh sách tin nhắn đã gửi</h3>
                    <ul class="list-group">
                        @foreach($messages as $message)
                            <li class="list-group-item">
                                <strong>{{ $message->title }}</strong><br>
                                {{ $message->content }}<br>
                                <small>Phòng ban: {{ json_decode($message->departments) }}</small>
                            </li>
                        @endforeach
                    </ul>
                    <!-- /.list-group -->
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
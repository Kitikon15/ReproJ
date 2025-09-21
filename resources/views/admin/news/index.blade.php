@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>จัดการข่าวสาร</h1>
    <div>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> กลับ Dashboard
        </a>
        <button class="btn btn-primary">
            <i class="fas fa-plus"></i> เพิ่มข่าวสาร
        </button>
    </div>
</div>

<div class="card">
    <div class="card-body">
        @if($news->count() > 0)
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>หัวข้อ</th>
                            <th>วันที่เผยแพร่</th>
                            <th>สถานะ</th>
                            <th>Featured</th>
                            <th>การดำเนินการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($news as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>
                                <strong>{{ $item->title_th }}</strong>
                                @if($item->title_en)
                                    <br><small class="text-muted">{{ $item->title_en }}</small>
                                @endif
                            </td>
                            <td>{{ $item->publish_date->format('d/m/Y') }}</td>
                            <td>
                                @if($item->is_published)
                                    <span class="badge bg-success">เผยแพร่</span>
                                @else
                                    <span class="badge bg-secondary">ร่าง</span>
                                @endif
                            </td>
                            <td>
                                @if($item->is_featured)
                                    <span class="badge bg-warning">Featured</span>
                                @else
                                    -
                                @endif
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <button class="btn btn-outline-primary" title="แก้ไข">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-outline-info" title="ดู">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-outline-danger" title="ลบ">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="d-flex justify-content-center">
                {{ $news->links() }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-newspaper fa-3x text-muted mb-3"></i>
                <h4>ยังไม่มีข่าวสาร</h4>
                <p class="text-muted">เริ่มต้นโดยการเพิ่มข่าวสารใหม่</p>
                <button class="btn btn-primary">
                    <i class="fas fa-plus"></i> เพิ่มข่าวสารแรก
                </button>
            </div>
        @endif
    </div>
</div>
@endsection
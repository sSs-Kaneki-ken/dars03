@extends('../../layouts/admin')

@section('title', 'Gallery')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content mt-4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h4 class="card-title">FilterizR Gallery with Ekko Lightbox</h4>
            </div>
            <div class="card-body">
              <div>
                <div class="btn-group w-100 mb-2">
                  <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> All items </a>
                  <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> Category 1 (WHITE) </a>
                  <a class="btn btn-info" href="javascript:void(0)" data-filter="2"> Category 2 (BLACK) </a>
                  <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> Category 3 (COLORED) </a>
                  <a class="btn btn-info" href="javascript:void(0)" data-filter="4"> Category 4 (COLORED, BLACK) </a>
                </div>
                <div class="mb-2">
                  <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> Shuffle items </a>
                  <div class="float-right">
                    <select class="custom-select" style="width: auto;" data-sortOrder>
                      <option value="index"> Sort by Position </option>
                      <option value="sortData"> Sort by Custom Data </option>
                    </select>
                    <div class="btn-group">
                      <a class="btn btn-default" href="javascript:void(0)" data-sortAsc> Ascending </a>
                      <a class="btn btn-default" href="javascript:void(0)" data-sortDesc> Descending </a>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="filter-container p-0 row"> <!--Концепт Яблочки-->
                  <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox"
                      data-title="sample 1 - white">
                      <img src="https://masterpiecer-images.s3.yandex.net/6d299968781511eeb1ce1e5d9776cfa6:upscaled" class="img-fluid mb-2"
                        alt="white sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                    <a href="https://via.placeholder.com/1200/000000.png?text=2" data-toggle="lightbox"
                      data-title="sample 2 - black">
                      <img src="https://masterpiecer-images.s3.yandex.net/f7452e807b4b11ee9fd7aaafe6635749:upscaled" class="img-fluid mb-2"
                        alt="black sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                    <a href="https://img.freepik.com/premium-photo/free-photo-beautiful-apple-with-water_922856-101.jpg" data-toggle="lightbox"
                      data-title="sample 3 - red">
                      <img src="https://img.freepik.com/premium-photo/free-photo-beautiful-apple-with-water_922856-101.jpg" class="img-fluid mb-2"
                        alt="red sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox"
                      data-title="sample 4 - red">
                      <img src="https://img.freepik.com/premium-photo/photo-juicy-fresh-red-apple-with-water-drops_916912-1234.jpg" class="img-fluid mb-2"
                        alt="red sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                    <a href="https://via.placeholder.com/1200/000000.png?text=5" data-toggle="lightbox"
                      data-title="sample 5 - black">
                      <img src="https://img.freepik.com/premium-photo/two-red-apples-with-green-leaves-table-with-water-droplets-them_927923-465.jpg" class="img-fluid mb-2"
                        alt="black sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=6" data-toggle="lightbox"
                      data-title="sample 6 - white">
                      <img src="https://masterpiecer-images.s3.yandex.net/a2d9cdcc6d4911ee8a4abadf81d486ab:upscaled" class="img-fluid mb-2"
                        alt="white sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=7" data-toggle="lightbox"
                      data-title="sample 7 - white">
                      <img src="https://masterpiecer-images.s3.yandex.net/b47192bf7d5211ee9aa2363fac71b015:upscaled" class="img-fluid mb-2"
                        alt="white sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                    <a href="https://via.placeholder.com/1200/000000.png?text=8" data-toggle="lightbox"
                      data-title="sample 8 - black">
                      <img src="https://masterpiecer-images.s3.yandex.net/51c17c236c5911eeb722badf81d486ab:upscaled" class="img-fluid mb-2"
                        alt="black sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox"
                      data-title="sample 9 - red">
                      <img src="https://masterpiecer-images.s3.yandex.net/41978cfbad7611ee88fefa3bbea4aa60:upscaled" class="img-fluid mb-2"
                        alt="red sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=10" data-toggle="lightbox"
                      data-title="sample 10 - white">
                      <img src="https://masterpiecer-images.s3.yandex.net/52700133464011ee93153eecbe30a25c:upscaled" class="img-fluid mb-2"
                        alt="white sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=11" data-toggle="lightbox"
                      data-title="sample 11 - white">
                      <img src="https://masterpiecer-images.s3.yandex.net/8b38d650323a11eeb1820e0aeb14d228:upscaled" class="img-fluid mb-2"
                        alt="white sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                    <a href="https://via.placeholder.com/1200/000000.png?text=12" data-toggle="lightbox"
                      data-title="sample 12 - black">
                      <img src="https://masterpiecer-images.s3.yandex.net/a42ee7465ec711eea97fcef0812af5c0:upscaled" class="img-fluid mb-2"
                        alt="black sample" />
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h4 class="card-title">Ekko Lightbox</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox"
                    data-title="sample 1 - white" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/FFFFFF?text=1" class="img-fluid mb-2"
                      alt="white sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/000000.png?text=2" data-toggle="lightbox"
                    data-title="sample 2 - black" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/000000?text=2" class="img-fluid mb-2"
                      alt="black sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox"
                    data-title="sample 3 - red" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3" class="img-fluid mb-2"
                      alt="red sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox"
                    data-title="sample 4 - red" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4" class="img-fluid mb-2"
                      alt="red sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/000000.png?text=5" data-toggle="lightbox"
                    data-title="sample 5 - black" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/000000?text=5" class="img-fluid mb-2"
                      alt="black sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/FFFFFF.png?text=6" data-toggle="lightbox"
                    data-title="sample 6 - white" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/FFFFFF?text=6" class="img-fluid mb-2"
                      alt="white sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/FFFFFF.png?text=7" data-toggle="lightbox"
                    data-title="sample 7 - white" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/FFFFFF?text=7" class="img-fluid mb-2"
                      alt="white sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/000000.png?text=8" data-toggle="lightbox"
                    data-title="sample 8 - black" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/000000?text=8" class="img-fluid mb-2"
                      alt="black sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox"
                    data-title="sample 9 - red" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2"
                      alt="red sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/FFFFFF.png?text=10" data-toggle="lightbox"
                    data-title="sample 10 - white" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/FFFFFF?text=10" class="img-fluid mb-2"
                      alt="white sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/FFFFFF.png?text=11" data-toggle="lightbox"
                    data-title="sample 11 - white" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/FFFFFF?text=11" class="img-fluid mb-2"
                      alt="white sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/000000.png?text=12" data-toggle="lightbox"
                    data-title="sample 12 - black" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/000000?text=12" class="img-fluid mb-2"
                      alt="black sample" />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
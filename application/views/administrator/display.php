<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Video Player -->
            <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                <div class="card" id="nowStreaming" style="background-color: pink; width:100%; height:70vh;">

                    <video id="mainVideo" width="100%" height="auto" autoplay loop muted controls>
                        <source src="./assets/resources/qsdVideos/vid2.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                </div>
            </div>

            <!-- Playlist -->
            <div class="col-md-6 col-lg-4 order-2 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Video Playlist</h5>
                    </div>

                    <form action="<?= base_url('videos'); ?>" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <label for="videoUpload">Upload Video:</label>
                            <input type="file" id="videoUpload" name="videoUpload" accept="video/*" required>
                            <button type="submit" class="btn btn-primary mt-2">Upload</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
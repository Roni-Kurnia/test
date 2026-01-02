<main>
    <div class="bg-dark">
    <div style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <h1 class="display-4 fw-bold text-white mb-3">
                        Album <span class="text-info">Project</span>
                    </h1>
                    <p class="lead text-white-50 mb-4">
                        Koleksi project yang telah saya kerjakan sebagai bagian dari portofolio. 
                        Setiap project mencerminkan dedikasi dan skill yang terus saya kembangkan.
                    </p>
                </div>
            </div>
        </section>
    </div>
    <div class="album py-5 " style=" background-color: #2a2b2bff;">
        <div class="container">
            <div class="row gx-3 d-flex justify-content-center">
                <?php foreach($data['projects'] as $project): ?>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card h-100 border-0 shadow-lg project-card" 
                            style="background: linear-gradient(135deg, #2a2a2a 0%, #3a3a3a 100%); 
                                    transition: all 0.3s ease;">
                            <div class="position-relative overflow-hidden">
                                <img src="<?= BASEURL; ?>/asset/project/<?= $project['image']; ?>" 
                                    class="card-img-top project-image" 
                                    alt="Laravel Project"
                                    style="height: 250px; object-fit: cover; transition: transform 0.3s ease;">
                                <div class="position-absolute top-0 end-0 m-3">
                                    <span class="badge bg-info"><?= $project['type']; ?></span>
                                </div>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-white fw-bold mb-3"><?= $project['title']; ?></h5>
                                <p class="card-text text-white-50 flex-grow-1"><?= $project['description']; ?></p>
                                <div class="d-flex gap-2">
                                    <a target="_blank" href="<?= $project['visit_url']; ?>" class="btn btn-info flex-fill">
                                        <i class="bi bi-eye"></i> Visit
                                    </a>
                                    <a target="_blank" href="<?= $project['code_url']; ?>" class="btn btn-outline-info flex-fill">
                                        <i class="bi bi-code"></i> Code
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</main>

<style>
    .project-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(23,162,184,0.3) !important;
    }

    .project-card:hover .project-image {
        transform: scale(1.1);
    }

    .btn {
        transition: all 0.3s ease;
    }

    .btn:hover {
        transform: translateY(-2px);
    }

    .badge {
        font-size: 0.75rem;
        padding: 0.4rem 0.8rem;
    }

    @media (max-width: 768px) {
        .display-4 {
            font-size: 2rem;
        }
        
        .card-img-top {
            height: 200px !important;
        }
    }
</style>
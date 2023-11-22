<aside class="navbar navbar-vertical navbar-expand-lg bg-website">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
        <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href="{{{ route('cms.users.dashboard') }}}">
                <img src="{{ asset('img/logo.svg') }}"  />
            </a>
        </h1>

        @php $rolePermission = empty(getPermissions() === false) ? getPermissions() : []; @endphp
        <div class="navbar-nav flex-row d-lg-none">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                    <span class="avatar avatar-sm">
                        <i class="ti ti-user-circle icon"></i>
                    </span>
                    <div class="d-none d-xl-block ps-2">resources/views/fixeddeposit/fd-payment-log.blade.php
                        <div>{{ Auth::user()->name }}</div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <!-- <div class="p-2">
                        @if(empty(Auth::user()->roles) === false)
                            <b>Roles</b>
                            <ul class="list-unstyled">
                                @foreach(Auth::user()->roles as $role)
                                    <li><span class="badge badge-secondary">{{{ $role->name }}}</span></li>
                                @endforeach
                            </ul>
                        @endif
                    </div> -->
                    <div class="p-2 pop-up-flush">
                        <span>Redis Flush</span>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('cms.users.logout') }}" class="dropdown-item @if(!in_array('cms.users.logout',$rolePermission)) hidden @endif">Logout</a>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="navbar-nav pt-lg-3">
                <li class="nav-item @if(in_array(Route::currentRouteName(), ['cms.users.dashboard'])) active @endif">
                    @if(in_array('cms.users.dashboard',$rolePermission))
                    <a class="nav-link" href="{{ route('cms.users.dashboard') }}" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-dashboard icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Dashboard
                        </span>
                    </a>
                    @endif
                </li>

                <li  class="nav-item dropdown  @if(in_array(Route::currentRouteName(), ['cms.product.list', 'cms.product.add', 'cms.product.save', 'cms.product.edit', 'cms.product.view','cms.product.update', 'cms.product.delete', 'cms.product.status', 'cms.product.search', 'cms.product.download', 'cms.product-slug.list', 'cms.product-slug.add', 'cms.product-slug.save', 'cms.product-slug.edit', 'cms.product-slug.view','cms.product-slug.update', 'cms.product-slug.delete', 'cms.product-slug.status', 'cms.product-slug.search'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Products
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.product.list', 'cms.product.add', 'cms.product.save', 'cms.product.edit', 'cms.product.view','cms.product.update', 'cms.product.delete', 'cms.product.status', 'cms.product.search', 'cms.product.download', 'cms.product-slug.list', 'cms.product-slug.add', 'cms.product-slug.save', 'cms.product-slug.edit', 'cms.product-slug.view','cms.product-slug.update', 'cms.product-slug.delete', 'cms.product-slug.status', 'cms.product-slug.search'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.product.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.product.list', 'cms.product.add', 'cms.product.save', 'cms.product.edit', 'cms.product.view','cms.product.update', 'cms.product.delete', 'cms.product.status', 'cms.product.search', 'cms.product.download'])) active @endif" href="{{ route('cms.product.list') }}" >
                                    <i class="ti ti-file icon"></i> Product List
                                </a>
                                @endif
                                @if(in_array('cms.product-slug.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.product-slug.list', 'cms.product-slug.add', 'cms.product-slug.save', 'cms.product-slug.edit', 'cms.product-slug.view','cms.product-slug.update', 'cms.product-slug.delete', 'cms.product-slug.status', 'cms.product-slug.search'])) active @endif" href="{{ route('cms.product-slug.list') }}" >
                                    <i class="ti ti-file icon"></i> Product Slug
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>

                <li  class="nav-item dropdown  @if(in_array(Route::currentRouteName(), ['cms.articles.list', 'cms.articles.add', 'cms.articles.save', 'cms.articles.edit', 'cms.articles.view','cms.articles.update', 'cms.articles.delete', 'cms.articles.status', 'cms.articles.search', 'cms.articles.thumbnail', 'cms.articles.inner', 'cms.articles.product','cms.banner.list', 'cms.banner.add', 'cms.banner.save', 'cms.banner.edit', 'cms.banner.view','cms.banner.update', 'cms.banner.delete', 'cms.banner.status', 'cms.banner.search', 'cms.banner.download', 'cms.brand-story.list', 'cms.brand-story.add', 'cms.brand-story.save', 'cms.brand-story.edit', 'cms.brand-story.view','cms.brand-story.update', 'cms.brand-story.status', 'cms.brand-story.search', 'cms.contactus.list', 'cms.contactus.view', 'cms.contactus.search', 'cms.downloads.list', 'cms.downloads.add', 'cms.downloads.save', 'cms.downloads.edit', 'cms.downloads.view','cms.downloads.update', 'cms.downloads.delete', 'cms.downloads.status', 'cms.downloads.search',  'cms.faq.list', 'cms.faq.add', 'cms.faq.save', 'cms.faq.edit', 'cms.faq.view','cms.faq.update', 'cms.faq.delete', 'cms.faq.status', 'cms.faq-inner-page.list', 'cms.faq.search', 'cms.learningcentre.list', 'cms.learningcentre.add', 'cms.learningcentre.save', 'cms.learningcentre.edit', 'cms.learningcentre.view','cms.learningcentre.update', 'cms.learningcentre.delete', 'cms.learningcentre.status', 'cms.learningcentre.search', 'cms.menus.list', 'cms.menus.add', 'cms.menus.save', 'cms.menus.edit', 'cms.menus.view','cms.menus.update', 'cms.menus.delete', 'cms.menus.status', 'cms.menus.search', 'cms.news.list', 'cms.news.add', 'cms.news.save', 'cms.news.edit', 'cms.news.view','cms.news.update', 'cms.news.delete', 'cms.news.status', 'cms.news.search', 'cms.news.download', 'cms.testimonials.list', 'cms.testimonials.add', 'cms.testimonials.save', 'cms.testimonials.edit', 'cms.testimonials.view','cms.testimonials.update', 'cms.testimonials.status', 'cms.testimonials.search', 'cms.common-css.edit','cms.careercat.list','cms.careercat.add','cms.careercat.save','cms.careercat.edit','cms.careercat.update','cms.careercat.view','cms.careercat.search','cms.careerapply.seekersearch','cms.careercat.status','cms.careerapply.seekers','cms.csr.list','cms.csr.add','cms.csr.save','cms.csr.edit','cms.csr.update','cms.csr.view','cms.csr.search','cms.parentmenus.list', 'cms.parentmenus.add', 'cms.parentmenus.save', 'cms.parentmenus.edit', 'cms.parentmenus.view','cms.parentmenus.update', 'cms.parentmenus.delete', 'cms.parentmenus.status', 'cms.parentmenus.search','cms.aboutus.list', 'cms.aboutus.add', 'cms.aboutus.save', 'cms.aboutus.edit', 'cms.aboutus.view','cms.aboutus.update', 'cms.aboutus.delete', 'cms.aboutus.status', 'cms.aboutus.search', 'cms.boardofdirectors.list', 'cms.boardofdirectors.add', 'cms.boardofdirectors.edit', 'cms.boardofdirectors.view', 'cms.boardofdirectors.search', 'cms.committe.list', 'cms.committe.add', 'cms.committe.edit', 'cms.committe.view', 'cms.committe.search', 'cms.journey.list', 'cms.journey.add', 'cms.journey.edit', 'cms.journey.view', 'cms.journey.search','cms.page-content.list', 'cms.page-content.view', 'cms.page-content.edit', 'cms.page-content.search','cms.gst.list', 'cms.gst.add', 'cms.gst.save', 'cms.gst.edit', 'cms.gst.view','cms.gst.update',  'cms.gst.status', 'cms.gst.search','cms.faq.heading.list', 'cms.faq.heading.add', 'cms.faq.heading.save', 'cms.faq.heading.edit', 'cms.faq.heading.view','cms.faq.heading.update', 'cms.faq.heading.delete', 'cms.faq.heading.status', 'cms.faq.heading.search', 'cms.articlebanner.list', 'cms.articlebanner.add', 'cms.articlebanner.edit', 'cms.articlebanner.view'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-file icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Pages
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.articles.list', 'cms.articles.add', 'cms.articles.save', 'cms.articles.edit', 'cms.articles.view','cms.articles.update', 'cms.articles.delete', 'cms.articles.status', 'cms.articles.search', 'cms.articles.thumbnail', 'cms.articles.inner', 'cms.articles.product','cms.banner.list', 'cms.banner.add', 'cms.banner.save', 'cms.banner.edit', 'cms.banner.view','cms.banner.update', 'cms.banner.delete', 'cms.banner.status', 'cms.banner.search', 'cms.banner.download', 'cms.brand-story.list', 'cms.brand-story.add', 'cms.brand-story.save', 'cms.brand-story.edit', 'cms.brand-story.view','cms.brand-story.update', 'cms.brand-story.status', 'cms.brand-story.search', 'cms.contactus.list', 'cms.contactus.view', 'cms.contactus.search', 'cms.downloads.list', 'cms.downloads.add', 'cms.downloads.save', 'cms.downloads.edit', 'cms.downloads.view','cms.downloads.update', 'cms.downloads.delete', 'cms.downloads.status', 'cms.downloads.search',  'cms.faq.list', 'cms.faq.add', 'cms.faq.save', 'cms.faq.edit', 'cms.faq.view','cms.faq.update', 'cms.faq.delete', 'cms.faq.status', 'cms.faq-inner-page.list', 'cms.faq.search', 'cms.learningcentre.list', 'cms.learningcentre.add', 'cms.learningcentre.save', 'cms.learningcentre.edit', 'cms.learningcentre.view','cms.learningcentre.update', 'cms.learningcentre.delete', 'cms.learningcentre.status', 'cms.learningcentre.search',  'cms.menus.list', 'cms.menus.add', 'cms.menus.save', 'cms.menus.edit', 'cms.menus.view','cms.menus.update', 'cms.menus.delete', 'cms.menus.status', 'cms.menus.search', 'cms.news.list', 'cms.news.add', 'cms.news.save', 'cms.news.edit', 'cms.news.view','cms.news.update', 'cms.news.delete', 'cms.news.status', 'cms.news.search', 'cms.news.download',  'cms.testimonials.list', 'cms.testimonials.add', 'cms.testimonials.save', 'cms.testimonials.edit', 'cms.testimonials.view','cms.testimonials.update', 'cms.testimonials.status', 'cms.testimonials.search', 'cms.common-css.edit','cms.careercat.list','cms.careercat.add','cms.careercat.save','cms.careercat.edit','cms.careercat.update','cms.careercat.view','cms.careercat.search','cms.careerapply.seekersearch','cms.careercat.status','cms.careerapply.seekers','cms.csr.list','cms.csr.add','cms.csr.save','cms.csr.edit','cms.csr.update','cms.csr.view','cms.csr.search','cms.parentmenus.list', 'cms.parentmenus.add', 'cms.parentmenus.save', 'cms.parentmenus.edit', 'cms.parentmenus.view','cms.parentmenus.update', 'cms.parentmenus.delete', 'cms.parentmenus.status', 'cms.parentmenus.search','cms.aboutus.list', 'cms.aboutus.add', 'cms.aboutus.save', 'cms.aboutus.edit', 'cms.aboutus.view','cms.aboutus.update', 'cms.aboutus.delete', 'cms.aboutus.status', 'cms.aboutus.search', 'cms.boardofdirectors.list', 'cms.boardofdirectors.add', 'cms.boardofdirectors.edit', 'cms.boardofdirectors.view', 'cms.boardofdirectors.search', 'cms.committe.list', 'cms.committe.add', 'cms.committe.edit', 'cms.committe.view', 'cms.committe.search', 'cms.journey.list', 'cms.journey.add', 'cms.journey.edit', 'cms.journey.view', 'cms.journey.search','cms.page-content.list', 'cms.page-content.view', 'cms.page-content.edit', 'cms.page-content.search','cms.gst.list', 'cms.gst.add', 'cms.gst.save', 'cms.gst.edit', 'cms.gst.view','cms.gst.update',  'cms.gst.status', 'cms.gst.search','cms.faq.heading.list', 'cms.faq.heading.add', 'cms.faq.heading.save', 'cms.faq.heading.edit', 'cms.faq.heading.view','cms.faq.heading.update', 'cms.faq.heading.delete', 'cms.faq.heading.status', 'cms.faq.heading.search', 'cms.articlebanner.list', 'cms.articlebanner.add', 'cms.articlebanner.edit', 'cms.articlebanner.view'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.articles.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.articles.list', 'cms.articles.add', 'cms.articles.save', 'cms.articles.edit', 'cms.articles.view','cms.articles.update', 'cms.articles.delete', 'cms.articles.status', 'cms.articles.search', 'cms.articles.thumbnail', 'cms.articles.inner', 'cms.articles.product'])) active @endif" href="{{ route('cms.articles.list') }}" >
                                    <i class="ti ti-files icon"></i> Articles
                                </a>
                                @endif
                                @if(in_array('cms.banner.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.banner.list', 'cms.banner.add', 'cms.banner.save', 'cms.banner.edit', 'cms.banner.view','cms.banner.update', 'cms.banner.delete', 'cms.banner.status', 'cms.banner.search', 'cms.banner.download'])) active @endif" href="{{ route('cms.banner.list') }}" >
                                    <i class="ti ti-package icon"></i> Banner
                                </a>
                                @endif
                                @if(in_array('cms.brand-story.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.brand-story.list', 'cms.brand-story.add', 'cms.brand-story.save', 'cms.brand-story.edit', 'cms.brand-story.view','cms.brand-story.update', 'cms.brand-story.status', 'cms.brand-story.search'])) active @endif" href="{{ route('cms.brand-story.list') }}" >
                                    <i class="ti ti-brand-twitch"></i> Brand Story
                                </a>
                                @endif
                                @if(in_array('cms.contactus.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.contactus.list', 'cms.contactus.view', 'cms.contactus.search'])) active @endif" href="{{ route('cms.contactus.list') }}" >
                                    <i class="ti ti-phone icon"></i> Contact Us
                                </a>
                                @endif
                                @if(in_array('cms.downloads.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.downloads.list', 'cms.downloads.add', 'cms.downloads.save', 'cms.downloads.edit', 'cms.downloads.view','cms.downloads.update', 'cms.downloads.delete', 'cms.downloads.status', 'cms.downloads.search'])) active @endif" href="{{ route('cms.downloads.list') }}" >
                                    <i class="ti ti-download icon"></i> Downloads
                                </a>
                                @endif
                                @if(in_array('cms.faq.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.faq.list', 'cms.faq.add', 'cms.faq.save', 'cms.faq.edit', 'cms.faq.view','cms.faq.update', 'cms.faq.delete', 'cms.faq.status', 'cms.faq.search'])) active @endif" href="{{ route('cms.faq.list') }}" >
                                    <i class="ti ti-zoom-question icon"></i> Faq
                                </a>
                                @endif
                                @if(in_array('cms.faq.heading.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.faq.heading.list', 'cms.faq.heading.add', 'cms.faq.heading.save', 'cms.faq.heading.edit', 'cms.faq.heading.view','cms.faq.heading.update', 'cms.faq.heading.delete', 'cms.faq.heading.status', 'cms.faq.heading.search'])) active @endif" href="{{ route('cms.faq.heading.list') }}" >
                                    <i class="ti ti-zoom-question icon"></i> Faq Heading
                                </a>
                                @endif
                                @if(in_array('cms.faq-inner-page.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.faq-inner-page.list', 'cms.faq-inner-page.add', 'cms.faq-inner-page.save', 'cms.faq-inner-page.edit', 'cms.faq-inner-page.view','cms.faq-inner-page.update', 'cms.faq-inner-page.delete', 'cms.faq-inner-page.status', 'cms.faq-inner-page.search'])) active @endif" href="{{ route('cms.faq-inner-page.list') }}" >
                                    <i class="ti ti-zoom-question icon"></i> Faq Content page
                                </a>
                                @endif
                                @if(in_array('cms.learningcentre.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.learningcentre.list', 'cms.learningcentre.add', 'cms.learningcentre.save', 'cms.learningcentre.edit', 'cms.learningcentre.view','cms.learningcentre.update', 'cms.learningcentre.delete', 'cms.learningcentre.status', 'cms.learningcentre.search'])) active @endif" href="{{ route('cms.learningcentre.list') }}" >
                                    <i class="ti ti-book icon"></i> Learning Centre
                                </a>
                                @endif
                                @if(in_array('cms.menus.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.menus.list', 'cms.menus.add', 'cms.menus.save', 'cms.menus.edit', 'cms.menus.view','cms.menus.update', 'cms.menus.delete', 'cms.menus.status', 'cms.menus.search'])) active @endif" href="{{ route('cms.menus.list') }}" >
                                    <i class="ti ti-list icon"></i> Menus
                                </a>
                                @endif
                                @if(in_array('cms.news.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.news.list', 'cms.news.add', 'cms.news.save', 'cms.news.edit', 'cms.news.view','cms.news.update', 'cms.news.delete', 'cms.news.status', 'cms.news.search', 'cms.news.download'])) active @endif" href="{{ route('cms.news.list') }}" >
                                    <i class="ti ti-book icon"></i> News
                                </a>
                                @endif
                                @if(in_array('cms.testimonials.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.testimonials.list', 'cms.testimonials.add', 'cms.testimonials.save', 'cms.testimonials.edit', 'cms.testimonials.view','cms.testimonials.update', 'cms.testimonials.status', 'cms.testimonials.search'])) active @endif" href="{{ route('cms.testimonials.list') }}" >
                                    <i class="ti ti-blockquote icon"></i> Testimonials
                                </a>
                                @endif
                                @if(in_array('cms.careercat.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.careercat.list','cms.careercat.add','cms.careercat.save','cms.careercat.edit','cms.careercat.update','cms.careercat.view','cms.careercat.search'])) active @endif" href="{{ route('cms.careercat.list') }}" >
                                    <i class="ti ti-blockquote icon"></i> Careers
                                </a>
                                @endif
                                @if(in_array('cms.careerapply.seekers',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.careerapply.seekersearch','cms.careercat.status','cms.careerapply.seekers'])) active @endif" href="{{ route('cms.careerapply.seekers') }}" >
                                    <i class="ti ti-blockquote icon"></i>Job seekers
                                </a>
                                @endif
                                @if(in_array('cms.csr.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.csr.list','cms.csr.add','cms.csr.save','cms.csr.edit','cms.csr.update','cms.csr.view','cms.csr.search'])) active @endif" href="{{ route('cms.csr.list') }}" >
                                    <i class="ti ti-files icon"></i> CSR
                                </a>
                                @endif
                               <!--  @if(in_array('cms.common-css.edit',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.common-css.edit'])) active @endif" href="{{ route('cms.common-css.edit', ['id' => 1]) }}" >
                                    <i class="ti ti-list icon"></i> Common Css
                                </a>
                                @endif -->
                                @if(in_array('cms.parentmenus.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.parentmenus.list', 'cms.parentmenus.add', 'cms.parentmenus.save', 'cms.parentmenus.edit', 'cms.parentmenus.view','cms.parentmenus.update', 'cms.parentmenus.delete', 'cms.parentmenus.status', 'cms.parentmenus.search'])) active @endif" href="{{ route('cms.parentmenus.list') }}" >
                                    <i class="ti ti-list icon"></i> Footer Menus
                                </a>
                                @endif
                                @if(in_array('cms.aboutus.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.aboutus.list', 'cms.aboutus.add', 'cms.aboutus.save', 'cms.aboutus.edit', 'cms.aboutus.view','cms.aboutus.update', 'cms.aboutus.delete', 'cms.aboutus.status', 'cms.aboutus.search'])) active @endif" href="{{ route('cms.aboutus.list') }}" >
                                    <i class="ti ti-list icon"></i> About Us
                                </a>
                                @endif
                                @if(in_array('cms.boardofdirectors.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.boardofdirectors.list', 'cms.boardofdirectors.add', 'cms.boardofdirectors.save', 'cms.boardofdirectors.edit', 'cms.boardofdirectors.view','cms.boardofdirectors.update', 'cms.boardofdirectors.delete', 'cms.boardofdirectors.status', 'cms.boardofdirectors.search'])) active @endif" href="{{ route('cms.boardofdirectors.list') }}" >
                                    <i class="ti ti-list icon"></i>Board of Directors
                                </a>
                                @endif
                                @if(in_array('cms.committe.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.committe.list', 'cms.committe.add', 'cms.committe.save', 'cms.committe.edit', 'cms.committe.view','cms.committe.update', 'cms.committe.delete', 'cms.committe.status', 'cms.committe.search'])) active @endif" href="{{ route('cms.committe.list') }}" >
                                    <i class="ti ti-list icon"></i>Committee
                                </a>
                                @endif
                                @if(in_array('cms.journey.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.journey.list', 'cms.journey.add', 'cms.journey.save', 'cms.journey.edit', 'cms.journey.view','cms.journey.update', 'cms.journey.delete', 'cms.journey.status', 'cms.journey.search'])) active @endif" href="{{ route('cms.journey.list') }}" >
                                    <i class="ti ti-list icon"></i>Our Journey
                                </a>
                                @endif
                                @if(in_array('cms.page-content.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.page-content.list', 'cms.page-content.add', 'cms.page-content.save', 'cms.page-content.edit', 'cms.page-content.view','cms.page-content.update',  'cms.page-content.status', 'cms.page-content.search'])) active @endif" href="{{ route('cms.page-content.list') }}" >
                                    <i class="ti ti-recycle icon"></i> Page Content
                                </a>
                                @endif
                                @if(in_array('cms.gst.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.gst.list', 'cms.gst.add', 'cms.gst.save', 'cms.gst.edit', 'cms.gst.view','cms.gst.update',  'cms.gst.status', 'cms.gst.search'])) active @endif" href="{{ route('cms.gst.list') }}" >
                                    <i class="ti ti-recycle icon"></i> GST
                                </a>
                                @endif
                                @if(in_array('cms.gst.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.articlebanner.list', 'cms.articlebanner.add','cms.articlebanner.edit', 'cms.articlebanner.view'])) active @endif" href="{{ route('cms.articlebanner.list') }}" >
                                    <i class="ti ti-recycle icon"></i> Article Banner
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>

                <!-- <li class="nav-item dropdown @if(in_array(Route::currentRouteName(), ['cms.cdnUpload'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                            CDN
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.cdnUpload'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.gl.crmLeadList',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.cdnUpload'])) active @endif" href="{{ route('cms.cdnUpload') }}" >
                                    <i class="ti ti-file icon"></i> CDN Upload
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li> -->

                <li  class="nav-item dropdown  @if(in_array(Route::currentRouteName(), ['cms.auction.list', 'cms.auction.add', 'cms.auction.save', 'cms.auction.edit', 'cms.auction.view','cms.auction.update', 'cms.auction.download', 'cms.auction.status', 'cms.auction.search','cms.auction.delete','cms.investors.list', 'cms.investors.add', 'cms.investors.save', 'cms.investors.edit', 'cms.investors.view','cms.investors.update', 'cms.investors.mappedajax', 'cms.investors.status', 'cms.investors.search',  'cms.emailsubscribe.list', 'cms.emailsubscribe.search',  'cms.notification.list', 'cms.notification.add', 'cms.notification.edit', 'cms.notification.view', 'cms.notification.search', 'cms.investor-menus.list', 'cms.investor-menus.add', 'cms.investor-menus.save', 'cms.investor-menus.edit', 'cms.investor-menus.view','cms.investor-menus.update', 'cms.investor-menus.delete', 'cms.investor-menus.status', 'cms.investor-menus.search', 'cms.investors-page.list', 'cms.investors-page.add', 'cms.investors-page.save', 'cms.investors-page.edit', 'cms.investors-page.view','cms.investors-page.update', 'cms.investors-page.mappedajax', 'cms.investors-page.status', 'cms.investors-page.search',  'cms.emailsubscribe.list', 'cms.emailsubscribe.search', 'cms.notification.list', 'cms.notification.add', 'cms.notification.save', 'cms.notification.edit', 'cms.notification.view','cms.notification.update',  'cms.notification.status', 'cms.notification.search','cms.intrest-rate-page.list', 'cms.intrest-rate-page.add', 'cms.intrest-rate-page.save', 'cms.intrest-rate-page.edit', 'cms.intrest-rate-page.view','cms.intrest-rate-page.update',  'cms.intrest-rate-page.status', 'cms.intrest-rate-page.search'])) active @endif">
                    <a class="nav-link dropdown-toggle"  href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-list icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Common
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.auction.list', 'cms.auction.add', 'cms.auction.save', 'cms.auction.edit', 'cms.auction.view','cms.auction.update', 'cms.auction.download', 'cms.auction.status', 'cms.auction.search', 'cms.auction.delete','cms.investors.list', 'cms.investors.add', 'cms.investors.save', 'cms.investors.edit', 'cms.investors.view','cms.investors.update', 'cms.investors.mappedajax', 'cms.investors.status', 'cms.investors.search', 'cms.emailsubscribe.list', 'cms.emailsubscribe.search', 'cms.notification.list', 'cms.notification.add', 'cms.notification.edit', 'cms.notification.view', 'cms.notification.search', 'cms.investor-menus.list', 'cms.investor-menus.add', 'cms.investor-menus.save', 'cms.investor-menus.edit', 'cms.investor-menus.view','cms.investor-menus.update', 'cms.investor-menus.delete', 'cms.investor-menus.status', 'cms.investor-menus.search', 'cms.investors-page.list', 'cms.investors-page.add', 'cms.investors-page.save', 'cms.investors-page.edit', 'cms.investors-page.view','cms.investors-page.update', 'cms.investors-page.mappedajax', 'cms.investors-page.status', 'cms.investors-page.search',  'cms.emailsubscribe.list', 'cms.emailsubscribe.search', 'cms.notification.list', 'cms.notification.add', 'cms.notification.save', 'cms.notification.edit', 'cms.notification.view','cms.notification.update',  'cms.notification.status', 'cms.notification.search','cms.intrest-rate-page.list', 'cms.intrest-rate-page.add', 'cms.intrest-rate-page.save', 'cms.intrest-rate-page.edit', 'cms.intrest-rate-page.view','cms.intrest-rate-page.update',  'cms.intrest-rate-page.status', 'cms.intrest-rate-page.search'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <!-- @if(in_array('cms.branchlocators.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.branchlocators.list', 'cms.branchlocators.add', 'cms.branchlocators.save', 'cms.branchlocators.edit', 'cms.branchlocators.view','cms.branchlocators.update', 'cms.branchlocators.delete', 'cms.branchlocators.status', 'cms.branchlocators.search'])) active @endif" href="{{ route('cms.branchlocators.list') }}" >
                                    <i class="ti ti-git-branch icon"></i> Branch Locator
                                </a>
                                @endif -->
                                @if(in_array('cms.auction.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.auction.list', 'cms.auction.add', 'cms.auction.save', 'cms.auction.edit', 'cms.auction.view','cms.auction.delete','cms.auction.update', 'cms.auction.download', 'cms.auction.status', 'cms.auction.search'])) active @endif" href="{{ route('cms.auction.list') }}">
                                    <i class="ti ti-hammer icon"></i> Auction
                                </a>
                                @endif
                                <!-- @if(in_array('cms.investors.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.investors.list', 'cms.investors.add', 'cms.investors.save', 'cms.investors.edit', 'cms.investors.view','cms.investors.update', 'cms.investors.mappedajax', 'cms.investors.status', 'cms.investors.search'])) active @endif" href="{{ route('cms.investors.list') }}" >
                                    <i class="ti ti-cash-banknote icon"></i> Investors
                                </a>
                                @endif -->
                                @if(in_array('cms.investor-menus.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.investor-menus.list', 'cms.investor-menus.add', 'cms.investor-menus.save', 'cms.investor-menus.edit', 'cms.investor-menus.view','cms.investor-menus.update', 'cms.investor-menus.delete', 'cms.investor-menus.status', 'cms.investor-menus.search'])) active @endif" href="{{ route('cms.investor-menus.list') }}" >
                                    <i class="ti ti-list icon"></i> Investors Menus
                                </a>
                                @endif
                                @if(in_array('cms.investors-page.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.investors-page.list', 'cms.investors-page.add', 'cms.investors-page.save', 'cms.investors-page.edit', 'cms.investors-page.view','cms.investors-page.update', 'cms.investors-page.mappedajax', 'cms.investors-page.status', 'cms.investors-page.search'])) active @endif" href="{{ route('cms.investors-page.list') }}" >
                                    <i class="ti ti-cash-banknote icon"></i> Investors Pages
                                </a>
                                @endif
                                <!-- @if(in_array('cms.emailsubscribe.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.emailsubscribe.list', 'cms.emailsubscribe.search'])) active @endif" href="{{ route('cms.emailsubscribe.list') }}" >
                                    <i class="ti ti-file icon"></i> Email Subscribe
                                </a>
                                @endif -->
                                @if(in_array('cms.notification.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.notification.list', 'cms.notification.add', 'cms.notification.save', 'cms.notification.edit', 'cms.notification.view','cms.notification.update',  'cms.notification.status', 'cms.notification.search'])) active @endif" href="{{ route('cms.notification.list') }}" >
                                    <i class="ti ti-bell-ringing icon"></i> Notifications
                                </a>
                                @endif

                                @if(in_array('cms.intrest-rate-page.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.intrest-rate-page.list', 'cms.intrest-rate-page.add', 'cms.intrest-rate-page.save', 'cms.intrest-rate-page.edit', 'cms.intrest-rate-page.view','cms.intrest-rate-page.update',  'cms.intrest-rate-page.status', 'cms.intrest-rate-page.search'])) active @endif" href="{{ route('cms.intrest-rate-page.list') }}" >
                                   <i class="ti ti-list icon"></i> Intrest Rates
                                </a>
                                @endif
                                @if(in_array('cms.tm.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.tm.list', 'cms.tm.add', 'cms.tm.save', 'cms.tm.edit', 'cms.tm.view','cms.tm.update', 'cms.tm.delete', 'cms.tm.status', 'cms.tm.search'])) active @endif" href="{{ route('cms.tm.list') }}" >
                                    <i class="ti ti-files icon"></i> Terms & Conditions
                                </a>
                                @endif
                                @if(in_array('cms.ual.cmsUserActivityLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.ual.cmsUserActivityLogs'])) active @endif" href="{{ route('cms.ual.cmsUserActivityLogs') }}" >
                                    <i class="ti ti-file icon"></i>CMS User Activity Logs
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>
                <li  class="nav-item dropdown  @if(in_array(Route::currentRouteName(), ['cms.job.list'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-file icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Jobs
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.job.list'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.job.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.job.list'])) active @endif" href="{{ route('cms.job.list') }}" >
                                    <i class="ti ti-files icon"></i> List
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown  @if(in_array(Route::currentRouteName(), ['cms.media.list', 'cms.branchlocators.upload', 'cms.media.delete', 'cms.media.search', 'cms.media-release.list', 'cms.media-release.add', 'cms.media-release.save', 'cms.media-release.edit', 'cms.media-release.view','cms.media-release.update',  'cms.media-release.status', 'cms.media-release.search', 'cms.media-release.thumbnail', 'cms.media-release.inner', 'cms.media-release.slider', 'cms.media-release.pdf', 'cms.media-release.hindipdf', 'cms.media-release.category', 'cms.media-contacts.list', 'cms.media-contacts.add', 'cms.media-contacts.save', 'cms.media-contacts.edit', 'cms.media-contacts.view','cms.media-contacts.update',  'cms.media-contacts.status', 'cms.media-contacts.search', 'cms.media-contacts.phone', 'cms.media-contacts.email'])) active @endif">
                    <a class="nav-link dropdown-toggle"  href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-movie icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Media
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.media.list', 'cms.branchlocators.upload', 'cms.media.delete', 'cms.media.search', 'cms.media-release.list', 'cms.media-release.add', 'cms.media-release.save', 'cms.media-release.edit', 'cms.media-release.view','cms.media-release.update',  'cms.media-release.status', 'cms.media-release.search', 'cms.media-release.thumbnail', 'cms.media-release.inner', 'cms.media-release.slider', 'cms.media-release.pdf', 'cms.media-release.hindipdf', 'cms.media-release.category', 'cms.media-contacts.list', 'cms.media-contacts.add', 'cms.media-contacts.save', 'cms.media-contacts.edit', 'cms.media-contacts.view','cms.media-contacts.update',  'cms.media-contacts.status', 'cms.media-contacts.search', 'cms.media-contacts.phone', 'cms.media-contacts.email'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.media.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.media.list', 'cms.branchlocators.upload', 'cms.media.delete', 'cms.media.search'])) active @endif" href="{{ route('cms.media.list') }}" >
                                    <i class="ti ti-file icon"></i> Media
                                </a>
                                @endif
                                @if(in_array('cms.media-release.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.media-release.list', 'cms.media-release.add', 'cms.media-release.save', 'cms.media-release.edit', 'cms.media-release.view','cms.media-release.update',  'cms.media-release.status', 'cms.media-release.search', 'cms.media-release.thumbnail', 'cms.media-release.inner', 'cms.media-release.slider', 'cms.media-release.pdf', 'cms.media-release.hindipdf', 'cms.media-release.category'])) active @endif" href="{{ route('cms.media-release.list') }}">
                                    <i class="ti ti-movie icon"></i> Media Release
                                </a>
                                @endif
                                @if(in_array('cms.media-contacts.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.media-contacts.list', 'cms.media-contacts.add', 'cms.media-contacts.save', 'cms.media-contacts.edit', 'cms.media-contacts.view','cms.media-contacts.update',  'cms.media-contacts.status', 'cms.media-contacts.search',
                                'cms.media-contacts.phone', 'cms.media-contacts.email'])) active @endif " href="{{ route('cms.media-contacts.list') }}">
                                    <i class="ti ti-movie icon"></i> Media Contacts
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown @if(in_array(Route::currentRouteName(), ['cms.meta.list', 'cms.meta.add', 'cms.meta.save', 'cms.meta.edit', 'cms.meta.view','cms.meta.update',  'cms.meta.status', 'cms.meta.search', 'cms.redirection.list', 'cms.redirection.add', 'cms.redirection.save', 'cms.redirection.edit', 'cms.redirection.view','cms.redirection.update',  'cms.redirection.status', 'cms.redirection.delete', 'cms.redirection.search', 'cms.redirection302.list', 'cms.redirection302.add', 'cms.redirection302.save', 'cms.redirection302.edit', 'cms.redirection302.view','cms.redirection302.update',  'cms.redirection302.status', 'cms.redirection302.search', 'cms.redirection302.excelstore'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-zoom-question icon"></i>
                        </span>
                        <span class="nav-link-title">
                            SEO
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.meta.list', 'cms.meta.add', 'cms.meta.save', 'cms.meta.edit', 'cms.meta.view','cms.meta.update',  'cms.meta.status', 'cms.meta.search', 'cms.redirection.list', 'cms.redirection.add', 'cms.redirection.save', 'cms.redirection.edit', 'cms.redirection.view','cms.redirection.update',  'cms.redirection.status', 'cms.redirection.delete', 'cms.redirection.search', 'cms.redirection302.list', 'cms.redirection302.add', 'cms.redirection302.save', 'cms.redirection302.edit', 'cms.redirection302.view','cms.redirection302.update',  'cms.meta.metaDownload','cms.redirection302.status', 'cms.redirection302.search', 'cms.redirection302.excelstore'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.meta.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.meta.list', 'cms.meta.add', 'cms.meta.save', 'cms.meta.edit', 'cms.meta.view','cms.meta.update', 'cms.meta.metaDownload', 'cms.meta.status', 'cms.meta.search'])) active @endif" href="{{ route('cms.meta.list') }}" >
                                    <i class="ti ti-file icon"></i> Meta
                                </a>
                                @endif
                                @if(in_array('cms.ual.campaignLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.ual.campaignLogs'])) active @endif" href="{{ route('cms.ual.campaignLogs') }}" >
                                    <i class="ti ti-file icon"></i>Campaign Logs
                                </a>
                                @endif
                                @if(in_array('cms.redirection.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.redirection.list', 'cms.redirection.add', 'cms.redirection.save', 'cms.redirection.edit', 'cms.redirection.view','cms.redirection.update',  'cms.redirection.status', 'cms.redirection.delete', 'cms.redirection.search'])) active @endif" href="{{ route('cms.redirection.list') }}">
                                    <i class="ti ti-exchange icon"></i> 301 Redirection
                                </a>
                                @endif
                                @if(in_array('cms.redirection302.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.redirection302.list', 'cms.redirection302.add', 'cms.redirection302.save', 'cms.redirection302.edit', 'cms.redirection302.view','cms.redirection302.update',  'cms.redirection302.status', 'cms.redirection302.search', 'cms.redirection302.excelstore'])) active @endif" href="{{ route('cms.redirection302.list') }}">
                                    <i class="ti ti-exchange icon"></i> 302 Redirection
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>


                <li class="nav-item dropdown @if(in_array(Route::currentRouteName(), ['cms.branchlocators.list', 'cms.branchlocators.add', 'cms.branchlocators.save', 'cms.branchlocators.edit', 'cms.branchlocators.view','cms.branchlocators.update', 'cms.branchlocators.delete', 'cms.branchlocators.status', 'cms.branchlocators.search','cms.fuelCompany.list', 'cms.fuelCompany.add', 'cms.fuelCompany.save', 'cms.fuelCompany.edit', 'cms.fuelCompany.view','cms.fuelCompany.update',  'cms.fuelCompany.status', 'cms.fuelCompany.search', 'cms.redirection.list', 'cms.redirection.add','cms.productstatus.list', 'cms.productstatus.add', 'cms.productstatus.save', 'cms.productstatus.edit', 'cms.productstatus.view','cms.productstatus.update',  'cms.productstatus.status', 'cms.productstatus.search','cms.plifscMaster.list', 'cms.plifscMaster.add', 'cms.plifscMaster.save', 'cms.plifscMaster.edit', 'cms.plifscMaster.view','cms.plifscMaster.update',  'cms.plifscMaster.search','cms.fdbankmaster.list', 'cms.fdbankmaster.add', 'cms.fdbankmaster.save', 'cms.fdbankmaster.edit', 'cms.fdbankmaster.view','cms.fdbankmaster.update', 'cms.fdbankmaster.status',   'cms.fdbankmaster.search','cms.pincodemaster.list', 'cms.pincodemaster.add', 'cms.pincodemaster.save', 'cms.pincodemaster.edit', 'cms.pincodemaster.view','cms.pincodemaster.update', 'cms.pincodemaster.search', 'cms.doctypemaster.list', 'cms.doctypemaster.add', 'cms.doctypemaster.save', 'cms.doctypemaster.edit', 'cms.doctypemaster.view','cms.doctypemaster.update', 'cms.doctypemaster.status', 'cms.doctypemaster.search','cms.fdpincodemaster.list', 'cms.fdpincodemaster.add', 'cms.fdpincodemaster.save', 'cms.fdpincodemaster.edit', 'cms.fdpincodemaster.view','cms.fdpincodemaster.update', 'cms.fdpincodemaster.search','cms.fdaddressproofmaster.list', 'cms.fdaddressproofmaster.add', 'cms.fdaddressproofmaster.save', 'cms.fdaddressproofmaster.edit', 'cms.fdaddressproofmaster.view','cms.fdaddressproofmaster.update', 'cms.fdaddressproofmaster.search','cms.fdemployeereferralmaster.list', 'cms.fdemployeereferralmaster.add', 'cms.fdemployeereferralmaster.save', 'cms.fdemployeereferralmaster.edit', 'cms.fdemployeereferralmaster.view','cms.fdemployeereferralmaster.update', 'cms.fdemployeereferralmaster.status', 'cms.fdemployeereferralmaster.search', 'cms.fdgendermaster.list', 'cms.fdgendermaster.add', 'cms.fdgendermaster.save', 'cms.fdgendermaster.edit', 'cms.fdgendermaster.view','cms.fdgendermaster.update', 'cms.fdgendermaster.status', 'cms.fdgendermaster.search','cms.fdoccupationmaster.list', 'cms.fdoccupationmaster.add', 'cms.fdoccupationmaster.save', 'cms.fdoccupationmaster.edit', 'cms.fdoccupationmaster.view','cms.fdoccupationmaster.update', 'cms.fdoccupationmaster.status', 'cms.fdoccupationmaster.search', 'cms.fdmaritalmaster.list', 'cms.fdmaritalmaster.add', 'cms.fdmaritalmaster.save', 'cms.fdmaritalmaster.edit', 'cms.fdmaritalmaster.view','cms.fdmaritalmaster.update', 'cms.fdmaritalmaster.status', 'cms.fdmaritalmaster.search','cms.fdtitlemaster.list', 'cms.fdtitlemaster.add', 'cms.fdtitlemaster.save', 'cms.fdtitlemaster.edit', 'cms.fdtitlemaster.view','cms.fdtitlemaster.update', 'cms.fdtitlemaster.status', 'cms.fdtitlemaster.search','cms.fdnomineemaster.list', 'cms.fdnomineemaster.add', 'cms.fdnomineemaster.save', 'cms.fdnomineemaster.edit', 'cms.fdnomineemaster.view','cms.fdnomineemaster.update', 'cms.fdnomineemaster.status', 'cms.fdnomineemaster.search'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Master
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.branchlocators.list', 'cms.branchlocators.add', 'cms.branchlocators.save', 'cms.branchlocators.edit', 'cms.branchlocators.view','cms.branchlocators.update', 'cms.branchlocators.delete', 'cms.branchlocators.status', 'cms.branchlocators.search', 'cms.fuelCompany.list', 'cms.fuelCompany.add', 'cms.fuelCompany.save', 'cms.fuelCompany.edit', 'cms.fuelCompany.view','cms.fuelCompany.update',  'cms.fuelCompany.status', 'cms.fuelCompany.search','cms.productstatus.list', 'cms.productstatus.add', 'cms.productstatus.save', 'cms.productstatus.edit', 'cms.productstatus.view','cms.productstatus.update',  'cms.productstatus.status', 'cms.productstatus.search','cms.plifscMaster.list', 'cms.plifscMaster.add', 'cms.plifscMaster.save', 'cms.plifscMaster.edit', 'cms.plifscMaster.view','cms.plifscMaster.update',  'cms.plifscMaster.search','cms.fdbankmaster.list', 'cms.fdbankmaster.add', 'cms.fdbankmaster.save', 'cms.fdbankmaster.edit', 'cms.fdbankmaster.view','cms.fdbankmaster.update', 'cms.fdbankmaster.status',   'cms.fdbankmaster.search','cms.pincodemaster.list', 'cms.pincodemaster.add', 'cms.pincodemaster.save', 'cms.pincodemaster.edit', 'cms.pincodemaster.view','cms.pincodemaster.update', 'cms.pincodemaster.search', 'cms.doctypemaster.list', 'cms.doctypemaster.add', 'cms.doctypemaster.save', 'cms.doctypemaster.edit', 'cms.doctypemaster.view','cms.doctypemaster.update', 'cms.doctypemaster.status', 'cms.doctypemaster.search','cms.fdpincodemaster.list', 'cms.fdpincodemaster.add', 'cms.fdpincodemaster.save', 'cms.fdpincodemaster.edit', 'cms.fdpincodemaster.view','cms.fdpincodemaster.update', 'cms.fdpincodemaster.search','cms.fdaddressproofmaster.list', 'cms.fdaddressproofmaster.add', 'cms.fdaddressproofmaster.save', 'cms.fdaddressproofmaster.edit', 'cms.fdaddressproofmaster.view','cms.fdaddressproofmaster.update', 'cms.fdaddressproofmaster.search','cms.fdemployeereferralmaster.list', 'cms.fdemployeereferralmaster.add', 'cms.fdemployeereferralmaster.save', 'cms.fdemployeereferralmaster.edit', 'cms.fdemployeereferralmaster.view','cms.fdemployeereferralmaster.update', 'cms.fdemployeereferralmaster.status', 'cms.fdemployeereferralmaster.search', 'cms.fdgendermaster.list', 'cms.fdgendermaster.add', 'cms.fdgendermaster.save', 'cms.fdgendermaster.edit', 'cms.fdgendermaster.view','cms.fdgendermaster.update', 'cms.fdgendermaster.status', 'cms.fdgendermaster.search','cms.fdoccupationmaster.list', 'cms.fdoccupationmaster.add', 'cms.fdoccupationmaster.save', 'cms.fdoccupationmaster.edit', 'cms.fdoccupationmaster.view','cms.fdoccupationmaster.update', 'cms.fdoccupationmaster.status', 'cms.fdoccupationmaster.search', 'cms.fdmaritalmaster.list', 'cms.fdmaritalmaster.add', 'cms.fdmaritalmaster.save', 'cms.fdmaritalmaster.edit', 'cms.fdmaritalmaster.view','cms.fdmaritalmaster.update', 'cms.fdmaritalmaster.status', 'cms.fdmaritalmaster.search','cms.fdtitlemaster.list', 'cms.fdtitlemaster.add', 'cms.fdtitlemaster.save', 'cms.fdtitlemaster.edit', 'cms.fdtitlemaster.view','cms.fdtitlemaster.update', 'cms.fdtitlemaster.status', 'cms.fdtitlemaster.search','cms.fdnomineemaster.list', 'cms.fdnomineemaster.add', 'cms.fdnomineemaster.save', 'cms.fdnomineemaster.edit', 'cms.fdnomineemaster.view','cms.fdnomineemaster.update', 'cms.fdnomineemaster.status', 'cms.fdnomineemaster.search'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                               @if(in_array('cms.branchlocators.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.branchlocators.list', 'cms.branchlocators.add', 'cms.branchlocators.save', 'cms.branchlocators.edit', 'cms.branchlocators.view','cms.branchlocators.update', 'cms.branchlocators.delete', 'cms.branchlocators.status', 'cms.branchlocators.search'])) active @endif" href="{{ route('cms.branchlocators.list') }}" >
                                    <i class="ti ti-git-branch icon"></i> Branch Locator
                                </a>
                                @endif
                                @if(in_array('cms.fuelCompany.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.fuelCompany.list', 'cms.fuelCompany.add', 'cms.fuelCompany.save', 'cms.fuelCompany.edit', 'cms.fuelCompany.view','cms.fuelCompany.update',  'cms.fuelCompany.status', 'cms.fuelCompany.search'])) active @endif" href="{{ route('cms.fuelCompany.list') }}" >
                                    <i class="ti ti-file icon"></i> Fuel Center Company
                                </a>
                                 @endif
                                 @if(in_array('cms.productstatus.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.productstatus.list', 'cms.productstatus.add', 'cms.productstatus.save', 'cms.productstatus.edit', 'cms.productstatus.view','cms.productstatus.update',  'cms.productstatus.status', 'cms.productstatus.search'])) active @endif" href="{{ route('cms.productstatus.list') }}" >
                                    <i class="ti ti-file icon"></i> Product Status
                                </a>
                                 @endif
                                 @if(in_array('cms.plifscMaster.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.plifscMaster.list', 'cms.plifscMaster.add', 'cms.plifscMaster.save', 'cms.plifscMaster.edit', 'cms.plifscMaster.view','cms.plifscMaster.update',  'cms.plifscMaster.search'])) active @endif" href="{{ route('cms.plifscMaster.list') }}" >
                                    <i class="ti ti-file icon"></i> PL IFSC Master
                                </a>
                                 @endif
                                 @if(in_array('cms.fdbankmaster.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.fdbankmaster.list', 'cms.fdbankmaster.add', 'cms.fdbankmaster.save', 'cms.fdbankmaster.edit', 'cms.fdbankmaster.view','cms.fdbankmaster.update', 'cms.fdbankmaster.status',   'cms.fdbankmaster.search'])) active @endif" href="{{ route('cms.fdbankmaster.list') }}" >
                                    <i class="ti ti-file icon"></i> FD Bank Master
                                </a>
                                 @endif
                                 @if(in_array('cms.pincodemaster.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.pincodemaster.list', 'cms.pincodemaster.add', 'cms.pincodemaster.save', 'cms.pincodemaster.edit', 'cms.pincodemaster.view','cms.pincodemaster.update', 'cms.pincodemaster.search'])) active @endif" href="{{ route('cms.pincodemaster.list') }}" >
                                    <i class="ti ti-file icon"></i> Pincode Master
                                </a>
                                 @endif
                                 @if(in_array('cms.doctypemaster.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.doctypemaster.list', 'cms.doctypemaster.add', 'cms.doctypemaster.save', 'cms.doctypemaster.edit', 'cms.doctypemaster.view','cms.doctypemaster.update', 'cms.doctypemaster.status', 'cms.doctypemaster.search'])) active @endif" href="{{ route('cms.doctypemaster.list') }}" >
                                    <i class="ti ti-file icon"></i> Document Type Master
                                </a>
                                 @endif
                                 @if(in_array('cms.fdpincodemaster.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.fdpincodemaster.list', 'cms.fdpincodemaster.add', 'cms.fdpincodemaster.save', 'cms.fdpincodemaster.edit', 'cms.fdpincodemaster.view','cms.fdpincodemaster.update', 'cms.fdpincodemaster.search'])) active @endif" href="{{ route('cms.fdpincodemaster.list') }}" >
                                    <i class="ti ti-file icon"></i> FD Pincode Master
                                </a>
                                 @endif
                                 @if(in_array('cms.fdaddressproofmaster.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.fdaddressproofmaster.list', 'cms.fdaddressproofmaster.add', 'cms.fdaddressproofmaster.save', 'cms.fdaddressproofmaster.edit', 'cms.fdaddressproofmaster.view','cms.fdaddressproofmaster.update', 'cms.fdaddressproofmaster.search'])) active @endif" href="{{ route('cms.fdaddressproofmaster.list') }}" >
                                    <i class="ti ti-file icon"></i> FD Address Proof Master
                                </a>
                                 @endif
                                 @if(in_array('cms.fdemployeereferralmaster.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.fdemployeereferralmaster.list', 'cms.fdemployeereferralmaster.add', 'cms.fdemployeereferralmaster.save', 'cms.fdemployeereferralmaster.edit', 'cms.fdemployeereferralmaster.view','cms.fdemployeereferralmaster.update', 'cms.fdemployeereferralmaster.status', 'cms.fdemployeereferralmaster.search'])) active @endif" href="{{ route('cms.fdemployeereferralmaster.list') }}" >
                                    <i class="ti ti-file icon"></i> FD Employee Referral Master
                                </a>
                                 @endif
                                 @if(in_array('cms.fdgendermaster.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.fdgendermaster.list', 'cms.fdgendermaster.add', 'cms.fdgendermaster.save', 'cms.fdgendermaster.edit', 'cms.fdgendermaster.view','cms.fdgendermaster.update', 'cms.fdgendermaster.status', 'cms.fdgendermaster.search'])) active @endif" href="{{ route('cms.fdgendermaster.list') }}" >
                                    <i class="ti ti-file icon"></i> FD Gender Master
                                </a>
                                 @endif
                                 @if(in_array('cms.fdoccupationmaster.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.fdoccupationmaster.list', 'cms.fdoccupationmaster.add', 'cms.fdoccupationmaster.save', 'cms.fdoccupationmaster.edit', 'cms.fdoccupationmaster.view','cms.fdoccupationmaster.update', 'cms.fdoccupationmaster.status', 'cms.fdoccupationmaster.search'])) active @endif" href="{{ route('cms.fdoccupationmaster.list') }}" >
                                    <i class="ti ti-file icon"></i> FD Occupation Master
                                </a>
                                 @endif
                                 @if(in_array('cms.fdmaritalmaster.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.fdmaritalmaster.list', 'cms.fdmaritalmaster.add', 'cms.fdmaritalmaster.save', 'cms.fdmaritalmaster.edit', 'cms.fdmaritalmaster.view','cms.fdmaritalmaster.update', 'cms.fdmaritalmaster.status', 'cms.fdmaritalmaster.search'])) active @endif" href="{{ route('cms.fdmaritalmaster.list') }}" >
                                    <i class="ti ti-file icon"></i> FD Marital Master
                                </a>
                                 @endif
                                 @if(in_array('cms.fdtitlemaster.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.fdtitlemaster.list', 'cms.fdtitlemaster.add', 'cms.fdtitlemaster.save', 'cms.fdtitlemaster.edit', 'cms.fdtitlemaster.view','cms.fdtitlemaster.update', 'cms.fdtitlemaster.status', 'cms.fdtitlemaster.search'])) active @endif" href="{{ route('cms.fdtitlemaster.list') }}" >
                                    <i class="ti ti-file icon"></i> FD Title Master
                                </a>
                                 @endif
                                 @if(in_array('cms.fdnomineemaster.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.fdnomineemaster.list', 'cms.fdnomineemaster.add', 'cms.fdnomineemaster.save', 'cms.fdnomineemaster.edit', 'cms.fdnomineemaster.view','cms.fdnomineemaster.update', 'cms.fdnomineemaster.status', 'cms.fdnomineemaster.search'])) active @endif" href="{{ route('cms.fdnomineemaster.list') }}" >
                                    <i class="ti ti-file icon"></i> FD Nominee Master
                                </a>
                                 @endif
                                 @if(in_array('cms.blgustatesMasters.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.blgustatesMasters.list', 'cms.blgustatesMasters.add', 'cms.blgustatesMasters.save', 'cms.blgustatesMasters.edit', 'cms.blgustatesMasters.view','cms.blgustatesMasters.update',  'cms.blgustatesMasters.status', 'cms.blgustatesMasters.search'])) active @endif" href="{{ route('cms.blgustatesMasters.list') }}" >
                                    <i class="ti ti-file icon"></i> Bl Gu State Master
                                </a>
                                 @endif
                            </div>
                        </div>
                    </div>

                </li>

                <li class="nav-item dropdown @if(in_array(Route::currentRouteName(), ['cms.users.list', 'cms.users.add', 'cms.users.save', 'cms.users.edit', 'cms.users.update', 'cms.users.delete', 'cms.users.search', 'cms.users.status','cms.users.logins','cms.roles.list', 'cms.roles.add', 'cms.roles.save', 'cms.roles.edit', 'cms.roles.update', 'cms.roles.delete', 'cms.roles.status', 'cms.roles.search', 'cms.permissions.search', 'cms.permissions.status','cms.permissions.list','cms.permissions.migration', 'cms.permissions.migrate','cms.mobile.edit','cms.mobile.mobUpdate','cms.pan.panUpdation','cms.pan.edit','cms.pan.panUpdation','cms.mobile-expiry.edit','cms.mobile-expiry.mobileExpiryUpdation','cms.users.maintanance','cms.users.maintanance_edit', 'cms.configuration.list', 'cms.configuration.add', 'cms.configuration.save', 'cms.configuration.edit', 'cms.configuration.view','cms.configuration.update',  'cms.configuration.status', 'cms.configuration.search','cms.input.list', 'cms.input.add', 'cms.input.save', 'cms.input.edit', 'cms.input.view','cms.input.update',  'cms.input.status', 'cms.input.search', 'cms.input.thumbnail', 'cms.input.inner', 'cms.input.slider', 'cms.input.pdf', 'cms.input.hindipdf', 'cms.input.category','cms.email-configuration.list', 'cms.email-configuration.add', 'cms.email-configuration.save', 'cms.email-configuration.edit', 'cms.email-configuration.view','cms.email-configuration.update',  'cms.email-configuration.status', 'cms.email-configuration.search'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-settings icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Settings
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.users.list', 'cms.users.add', 'cms.users.save', 'cms.users.edit', 'cms.users.update', 'cms.users.delete', 'cms.users.search', 'cms.users.status', 'cms.users.logins', 'cms.roles.list', 'cms.roles.add', 'cms.roles.save', 'cms.roles.edit', 'cms.roles.update', 'cms.roles.delete','cms.roles.status', 'cms.roles.search', 'cms.permissions.search', 'cms.permissions.status', 'cms.permissions.list','cms.permissions.migration', 'cms.permissions.migrate','cms.mobile.edit','cms.mobile.mobUpdate','cms.pan.panUpdation','cms.pan.edit','cms.pan.panUpdation','cms.mobile-expiry.edit','cms.mobile-expiry.mobileExpiryUpdation','cms.users.maintanance','cms.users.maintanance_edit', 'cms.configuration.list', 'cms.configuration.add', 'cms.configuration.save', 'cms.configuration.edit', 'cms.configuration.view','cms.configuration.update',  'cms.configuration.status', 'cms.configuration.search','cms.input.list', 'cms.input.add', 'cms.input.save', 'cms.input.edit', 'cms.input.view','cms.input.update',  'cms.input.status', 'cms.input.search', 'cms.input.thumbnail', 'cms.input.inner', 'cms.input.slider', 'cms.input.pdf', 'cms.input.hindipdf', 'cms.input.category','cms.email-configuration.list', 'cms.email-configuration.add', 'cms.email-configuration.save', 'cms.email-configuration.edit', 'cms.email-configuration.view','cms.email-configuration.update',  'cms.email-configuration.status', 'cms.email-configuration.search'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.users.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.users.list', 'cms.users.add', 'cms.users.save', 'cms.users.edit', 'cms.users.update', 'cms.users.delete', 'cms.users.search', 'cms.users.status', 'cms.users.logins'])) active @endif" href="{{ route('cms.users.list') }}" >
                                    <i class="ti ti-arrow-right icon"></i> CMS Users
                                </a>
                                @endif
                                @if(in_array('cms.roles.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.roles.list', 'cms.roles.add', 'cms.roles.save', 'cms.roles.edit', 'cms.roles.update', 'cms.roles.delete', 'cms.roles.search', 'cms.roles.status'])) active @endif" href="{{ route('cms.roles.list') }}" >
                                    <i class="ti ti-arrow-right icon"></i> CMS Roles
                                </a>
                                @endif
                                @if(in_array('cms.permissions.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.permissions.list', 'cms.permissions.search', 'cms.permissions.status'])) active @endif" href="{{ route('cms.permissions.list') }}" >
                                    <i class="ti ti-arrow-right icon"></i> CMS Permissions
                                </a>
                                @endif
                                @if(in_array('cms.permissions.migration',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.permissions.migration', 'cms.permissions.migrate'])) active @endif" href="{{ route('cms.permissions.migration') }}" >
                                    <i class="ti ti-arrow-right icon"></i> CMS Permission Migration
                                </a>
                                @endif
                                @if(in_array('cms.mobile.mobUpdate',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.mobile.edit','cms.mobile.mobUpdate'])) active @endif" href="{{ route('cms.mobile.mobUpdate') }}" >
                                    <i class="ti ti-arrow-right icon"></i> Mobile Updation
                                </a>
                                @endif
                                @if(in_array('cms.pan.panUpdation',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.pan.edit','cms.pan.panUpdation'])) active @endif" href="{{ route('cms.pan.panUpdation') }}" >
                                    <i class="ti ti-arrow-right icon"></i> TW PAN Updation
                                </a>
                                @endif
                                @if(in_array('cms.mobile-expiry.mobileExpiryUpdation',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.mobile-expiry.edit','cms.mobile-expiry.mobileExpiryUpdation'])) active @endif" href="{{ route('cms.mobile-expiry.mobileExpiryUpdation') }}" >
                                    <i class="ti ti-arrow-right icon"></i> Mobile Expiry
                                </a>
                                @endif
                                <!-- @if(in_array('cms.users.maintanance',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.users.maintanance'])) active @endif" href="{{ route('cms.users.maintanance') }}" >
                                    <i class="ti ti-arrow-right icon"></i>Product Maintanance
                                </a>
                                @endif -->

                                @if(in_array('cms.productmaintenance.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.productmaintenance.list', 'cms.productmaintenance.add', 'cms.productmaintenance.save', 'cms.productmaintenance.edit', 'cms.productmaintenance.view','cms.productmaintenance.update',  'cms.productmaintenance.status', 'cms.productmaintenance.search'])) active @endif" href="{{ route('cms.productmaintenance.list') }}" >
                                    <i class="ti ti-recycle icon"></i> Maintenance Details
                                </a>
                                @endif
                                @if(in_array('cms.configuration.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.configuration.list', 'cms.configuration.add', 'cms.configuration.save', 'cms.configuration.edit', 'cms.configuration.view','cms.configuration.update',  'cms.configuration.status', 'cms.configuration.search'])) active @endif" href="{{ route('cms.configuration.list') }}" >
                                    <i class="ti ti-recycle icon"></i> Configuration
                                </a>
                                @endif
                                @if(in_array('cms.input.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.input.list', 'cms.input.add', 'cms.input.save', 'cms.input.edit', 'cms.input.view','cms.input.update',  'cms.input.status', 'cms.input.search'])) active @endif" href="{{ route('cms.input.list') }}">
                                    <i class="ti ti-movie icon"></i>Input
                                </a>
                                @endif
                                @if(in_array('cms.smsmode.smsModeUpdation',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.smsmode.smsModeUpdation'])) active @endif" href="{{ route('cms.smsmode.smsModeUpdation') }}" >
                                    <i class="ti ti-arrow-right icon"></i> SMS Mode
                                </a>
                                @endif
                                @if(in_array('cms.email-configuration.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.email-configuration.list', 'cms.email-configuration.add', 'cms.email-configuration.save', 'cms.email-configuration.edit', 'cms.email-configuration.view','cms.email-configuration.update',  'cms.email-configuration.status', 'cms.email-configuration.search'])) active @endif" href="{{ route('cms.email-configuration.list') }}" >
                                    <i class="ti ti-recycle icon"></i>Email Configuration
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>

                <!-- <li class="nav-item dropdown @if(in_array(Route::currentRouteName(), ['cms.thankyou','cms.comingsoon.list'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Coming Soon Page
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.thankyou','cms.comingsoon.list'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.gl.crmLeadList',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.thankyou'])) active @endif" href="{{ route('cms.thankyou') }}" >
                                    <i class="ti ti-file icon"></i> view
                                </a>
                                @endif
                                @if(in_array('cms.comingsoon.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.comingsoon.list','cms.comingsoon.search'])) active @endif" href="{{ route('cms.comingsoon.list') }}" >
                                    <i class="ti ti-file icon"></i> Coming Soon List
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li> -->

                <li class="nav-item @if(in_array(Route::currentRouteName(), ['cms.leads.list','cms.leads.view', 'cms.leads.search', 'cms.leads.lead-search'])) active @endif">
                    @if(in_array('cms.leads.list',$rolePermission))
                    <a class="nav-link" href="{{ route('cms.leads.list') }}" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Leads
                        </span>
                    </a>
                    @endif
                </li>

                <li class="nav-item dropdown @if(in_array(Route::currentRouteName(), ['cms.pl.list','cms.pl.leadSearch','cms.pl.answer','cms.pl.apiLogsLead','cms.pl.documentList','cms.pl.crmDocumentDownloadLog','cms.pl.crmLeadList','cms.pl.crmLeadsearch','cms.pl.notification','cms.pl.crmNotificationSearch','cms.pl.generalNotification','cms.personalloan.tempfile','cms.pl.blockuserupload'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Personal Loan
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.pl.list','cms.pl.leadSearch','cms.pl.answer','cms.pl.apiLogsLead','cms.pl.documentList','cms.pl.crmDocumentDownloadLog','cms.pl.crmLeadList','cms.pl.crmLeadsearch','cms.pl.notification','cms.pl.crmNotificationSearch','cms.pl.generalNotification','cms.personalloan.tempfile','cms.pl.blockuserupload'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.pl.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.pl.list','cms.pl.leadSearch','cms.pl.answer','cms.pl.apiLogsLead'])) active @endif" href="{{ route('cms.pl.list') }}" >
                                    <i class="ti ti-file icon"></i> Loan List
                                </a>
                                @endif
                                @if(in_array('cms.pl.documentList',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.pl.documentList','cms.pl.crmDocumentDownloadLog'])) active @endif" href="{{ route('cms.pl.documentList') }}" >
                                    <i class="ti ti-file icon"></i> Leads Download
                                </a>
                                @endif
                                @if(in_array('cms.pl.crmLeadList',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.pl.crmLeadList','cms.pl.crmLeadsearch'])) active @endif" href="{{ route('cms.pl.crmLeadList') }}" >
                                    <i class="ti ti-file icon"></i> Crm Lead List
                                </a>
                                @endif
                                @if(in_array('cms.pl.notification',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.pl.notification','cms.pl.crmNotificationSearch'])) active @endif" href="{{ route('cms.pl.notification') }}" >
                                    <i class="ti ti-file icon"></i> Notification List
                                </a>
                                @endif
                                @if(in_array('cms.pl.generalNotification',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.pl.generalNotification'])) active @endif" href="{{ route('cms.pl.generalNotification') }}" >
                                    <i class="ti ti-file icon"></i> General Notification
                                </a>
                                @endif
                                @if(in_array('cms.personalloan.tempfile',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.personalloan.tempfile'])) active @endif" href="{{ route('cms.personalloan.tempfile') }}" >
                                    <i class="ti ti-file icon"></i> Pl Temp File
                                </a>
                                @endif
                                @if(in_array('cms.personalloan.plMisCount',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.personalloan.plMisCount'])) active @endif" href="{{ route('cms.personalloan.plMisCount') }}" >
                                    <i class="ti ti-file icon"></i> Pl Mis Count
                                </a>
                                @endif
                                @if(in_array('cms.personalloan.tempfile',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.pl.blockuserupload'])) active @endif" href="{{ route('cms.pl.blockuserupload') }}" >
                                    <i class="ti ti-file icon"></i> Block User Upload
                                </a>
                                @endif
                                @if(in_array('cms.newpl.leadsList',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.newpl.leadsList'])) active @endif" href="{{ route('cms.newpl.leadsList') }}" >
                                    <i class="ti ti-file icon"></i> New Personal Loan
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item @if(in_array(Route::currentRouteName(), ['cms.personalloan.pldatadownload'])) active @endif">
                    @if(in_array('cms.personalloan.pldatadownload',$rolePermission))
                    <a class="nav-link" href="{{ route('cms.personalloan.pldatadownload') }}" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Personal Loan Report
                        </span>
                    </a>
                    @endif
                </li>

                <li class="nav-item dropdown @if(in_array(Route::currentRouteName(), ['cms.gl.crmLeadList','cms.gl.crmLeadsearch','cms.gl.crmUploadLog', 'cms.gl.crmNotification', 'cms.gl.crmGeneralNotify','cms.gl.crmLeadIndex', 'cms.gold-loan-temp.tempfile'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Gold Loan
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.gl.crmLeadList','cms.gl.crmLeadsearch','cms.gl.crmUploadLog','cms.gl.crmNotification', 'cms.gl.crmGeneralNotify','cms.gl.crmLeadIndex', 'cms.gold-loan-temp.tempfile'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.gl.crmLeadList',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.gl.crmLeadList','cms.gl.crmLeadsearch'])) active @endif" href="{{ route('cms.gl.crmLeadList') }}" >
                                    <i class="ti ti-file icon"></i> GLT CRM Lead List
                                </a>
                                @endif
                                @if(in_array('cms.gl.crmUploadLog',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.gl.crmUploadLog'])) active @endif" href="{{ route('cms.gl.crmUploadLog') }}" >
                                    <i class="ti ti-file icon"></i> GLT CRM Upload Logs
                                </a>
                                @endif
                                @if(in_array('cms.gl.crmLeadIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.gl.crmLeadIndex'])) active @endif" href="{{ route('cms.gl.crmLeadIndex') }}" >
                                    <i class="ti ti-file icon"></i> GLT CRM Downloads
                                </a>
                                @endif
                                @if(in_array('cms.gl.crmNotification',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.gl.crmNotification'])) active @endif" href="{{ route('cms.gl.crmNotification') }}" >
                                    <i class="ti ti-file icon"></i> List Notification
                                </a>
                                @endif
                                @if(in_array('cms.gl.crmGeneralNotify',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.gl.crmGeneralNotify'])) active @endif" href="{{ route('cms.gl.crmGeneralNotify') }}" >
                                    <i class="ti ti-file icon"></i> General Notification List
                                </a>
                                @endif
                                @if(in_array('cms.gold-loan-temp.tempfile',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.gold-loan-temp.tempfile'])) active @endif" href="{{ route('cms.gold-loan-temp.tempfile') }}" >
                                    <i class="ti ti-file icon"></i> GL Temp File
                                </a>
                                @endif
                                @if(in_array('cms.gl.gltMisCount',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.gl.gltMisCount'])) active @endif" href="{{ route('cms.gl.gltMisCount') }}" >
                                    <i class="ti ti-file icon"></i> GL Mis Count
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown @if(in_array(Route::currentRouteName(), ['cms.fixeddeposit.fd-logs','cms.fixeddeposit.fdlogSearch','cms.fixeddeposit.fdleadlogs','cms.fixeddeposit.leadlogSearch','cms.fixeddeposit.payment-logs','cms.fixeddeposit.paymentSearch','cms.fixeddeposit.fdapi-logs','cms.fixeddeposit.fdapiSearch','cms.fixeddeposit.ccPushLog-logs','cms.fixeddeposit.ccPushLogSearch','cms.fixeddeposit.revampFdLeads','cms.fixeddeposit.revampFdLeadsSearch','cms.fixeddeposit.ocrlogs','cms.fixeddeposit.fdmiscount','cms.fixeddeposit.fdpaymentcount','cms.fixeddeposit.finalsavelog','cms.fixeddeposit.finalsavelogSearch','cms.fixeddeposit.verify-penny-drop-log','cms.fixeddeposit.verify-penny-drop-log-search','cms.fixeddeposit.fdutmsourcelog','cms.fixeddeposit.fdUtmSourceLogSearch','cms.fixeddeposit.panverifylog','cms.fixeddeposit.panverifylogsearch','cms.fixeddeposit.fetchpanlog','cms.fixeddeposit.fetchpanlogsearch','cms.fixeddeposit.panProfile','cms.fixeddeposit.nsdlpanverifyLog','cms.fd.fdPushSmsLog' ,'cms.fixeddeposit.FinalSaveFailureLogSearch' ,'cms.fixeddeposit.finalsavefailure','cms.fixeddeposit.refundpayment','cms.fixeddeposit.refundpaymentsearch','cms.fixeddeposit.payment-reverse','cms.fixeddeposit.payment-reverse-search','cms.fixeddeposit.fd-flow-logs','cms.fixeddeposit.FdFlowLogSearch',
                    'cms.fixeddeposit.MisSearch','cms.fixeddeposit.mis-data','cms.fixeddeposit.ccPushLog-mongoDB','cms.fixeddeposit.mobilerapidfetch','cms.fd.Payment','cms.fd.searchPayment','cms.fd.fdleadparameter','cms.fd.searchLeadparameter','cms.fd.finalsavecron','cms.fd.finalsavesearch','cms.fd.agentinformation','cms.fd.agentinformationsearch','cms.paylead.payLeadsList', 'cms.paylead.payLeadsSearch', 'cms.paylead.payLeadsExport','cms.netcoremaillog.fd','cms.fd.fdSearchList','cms.fixeddeposit.fDPanFetchDetailsLogs','cms.fixeddeposit.fs-log','cms.fixeddeposit.fs-search'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                           Revamp FD CRM
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.fixeddeposit.fd-logs','cms.fixeddeposit.fdlogSearch','cms.fixeddeposit.fdleadlogs','cms.fixeddeposit.leadlogSearch','cms.fixeddeposit.payment-logs','cms.fixeddeposit.paymentSearch','cms.fixeddeposit.fdapi-logs','cms.fixeddeposit.fdapiSearch','cms.fixeddeposit.ccPushLog-logs','cms.fixeddeposit.ccPushLogSearch','cms.fixeddeposit.revampFdLeads','cms.fixeddeposit.revampFdLeadsSearch','cms.fixeddeposit.ocrlogs','cms.fixeddeposit.fdmiscount','cms.fixeddeposit.fdpaymentcount','cms.fixeddeposit.finalsavelog','cms.fixeddeposit.finalsavelogSearch','cms.fixeddeposit.verify-penny-drop-log','cms.fixeddeposit.verify-penny-drop-log-search','cms.fixeddeposit.fdutmsourcelog','cms.fixeddeposit.fdUtmSourceLogSearch','cms.fixeddeposit.panverifylog','cms.fixeddeposit.panverifylogsearch','cms.fixeddeposit.fetchpanlog','cms.fixeddeposit.fetchpanlogsearch','cms.fixeddeposit.panProfile','cms.fixeddeposit.nsdlpanverifyLog','cms.fd.fdPushSmsLog' ,'cms.fixeddeposit.FinalSaveFailureLogSearch' ,'cms.fixeddeposit.finalsavefailure','cms.fixeddeposit.refundpayment','cms.fixeddeposit.refundpaymentsearch','cms.fixeddeposit.payment-reverse','cms.fixeddeposit.payment-reverse-search','cms.fixeddeposit.fd-flow-logs','cms.fixeddeposit.FdFlowLogSearch',
                    'cms.fixeddeposit.MisSearch','cms.fixeddeposit.mis-data','cms.fixeddeposit.ccPushLog-mongoDB','cms.fixeddeposit.mobilerapidfetch','cms.fd.Payment','cms.fd.searchPayment','cms.fd.searchPayment','cms.fd.fdleadparameter','cms.fd.searchLeadparameter','cms.fd.finalsavecron','cms.fd.finalsavesearch','cms.fd.agentinformation','cms.fd.agentinformationsearch','cms.paylead.payLeadsList', 'cms.paylead.payLeadsSearch', 'cms.paylead.payLeadsExport','cms.overview.fd','cms.issuetracker.fd','cms.netcoremaillog.fd','cms.fd.fdSearchList','cms.fixeddeposit.fDPanFetchDetailsLogs','cms.fixeddeposit.fs-log','cms.fixeddeposit.fs-search'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.fixeddeposit.mis-data',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fixeddeposit.mis-data','cms.fixeddeposit.MisSearch'])) active @endif" href="{{ route('cms.fixeddeposit.mis-data') }}" >
                                    <i class="ti ti-file icon"></i>MIS
                                </a>
                                @endif
                                {{-- <a class="dropdown-item"
                                href="{{ route('cms.fixeddeposit.mis-data') }}" >
                                    <i class="ti ti-file icon"></i>MIS
                                </a> --}}
                                @if(in_array('cms.fixeddeposit.fd-logs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fixeddeposit.fd-logs','cms.fixeddeposit.fdlogSearch'])) active @endif" href="{{ route('cms.fixeddeposit.fd-logs') }}" >
                                    <i class="ti ti-file icon"></i>FD Logs
                                </a>
                                @endif
                                @if(in_array('cms.fixeddeposit.fdleadlogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fixeddeposit.fdleadlogs','cms.fixeddeposit.leadlogSearch'])) active @endif" href="{{ route('cms.fixeddeposit.fdleadlogs') }}" >
                                    <i class="ti ti-file icon"></i>FD Lead Logs
                                </a>
                                @endif
                                @if(in_array('cms.fixeddeposit.payment-logs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fixeddeposit.payment-logs','cms.fixeddeposit.paymentSearch'])) active @endif" href="{{ route('cms.fixeddeposit.payment-logs') }}" >
                                    <i class="ti ti-file icon"></i>Payment Logs
                                </a>
                                @endif
                                @if(in_array('cms.fixeddeposit.fd-flow-logs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fixeddeposit.fd-flow-logs','cms.fixeddeposit.FdFlowLogSearch'])) active @endif" href="{{ route('cms.fixeddeposit.fd-flow-logs') }}" >
                                    <i class="ti ti-file icon"></i>FD Flow Logs
                                </a>
                                @endif
                                @if(in_array('cms.fixeddeposit.refundpayment',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fixeddeposit.refundpayment','cms.fixeddeposit.refundpaymentsearch'])) active @endif" href="{{ route('cms.fixeddeposit.refundpayment') }}" >
                                    <i class="ti ti-file icon"></i> Refund Payment Logs
                                </a>
                                @endif
                                @if(in_array('cms.fixeddeposit.refundpayment',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fixeddeposit.payment-reverse','cms.fixeddeposit.payment-reverse-search'])) active @endif" href="{{ route('cms.fixeddeposit.payment-reverse') }}" >
                                    <i class="ti ti-file icon"></i> Reverse Payment Feed
                                </a>
                                @endif
                                @if(in_array('cms.fixeddeposit.fdapi-logs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fixeddeposit.fdapi-logs','cms.fixeddeposit.fdapiSearch'])) active @endif" href="{{ route('cms.fixeddeposit.fdapi-logs') }}" >
                                    <i class="ti ti-file icon"></i>FD Api Logs
                                </a>
                                @endif
                                @if(in_array('cms.fixeddeposit.ccPushLog-logs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fixeddeposit.ccPushLog-mongoDB','cms.fixeddeposit.ccPushLogSearch-mongoDB'])) active @endif" href="{{ route('cms.fixeddeposit.ccPushLog-mongoDB') }}" >
                                    <i class="ti ti-file icon"></i>CC PUSH CRON JOBS
                                </a>
                                @endif
                                @if(in_array('cms.fixeddeposit.ccPushLog-logs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fixeddeposit.ccPushLog-logs','cms.fixeddeposit.ccPushLogSearch'])) active @endif" href="{{ route('cms.fixeddeposit.ccPushLog-logs') }}" >
                                    <i class="ti ti-file icon"></i>CC Push Logs
                                </a>
                                @endif
                                @if(in_array('cms.fixeddeposit.revampFdLeads',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fixeddeposit.revampFdLeads','cms.fixeddeposit.revampFdLeadsSearch'])) active @endif" href="{{ route('cms.fixeddeposit.revampFdLeads') }}" >
                                    <i class="ti ti-file icon"></i>Revamp FD Leads
                                </a>
                                @endif
                                @if(in_array('cms.fixeddeposit.ocrlogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fixeddeposit.ocrlogs'])) active @endif" href="{{ route('cms.fixeddeposit.ocrlogs') }}" >
                                    <i class="ti ti-file icon"></i>OCR Logs
                                </a>
                                @endif
                                @if(in_array('cms.fixeddeposit.fdmiscount',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fixeddeposit.fdmiscount'])) active @endif" href="{{ route('cms.fixeddeposit.fdmiscount') }}" >
                                    <i class="ti ti-file icon"></i>FD Mis Count
                                </a>
                                @endif
                                @if(in_array('cms.fixeddeposit.fdmiscount',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fixeddeposit.fdpaymentcount'])) active @endif" href="{{ route('cms.fixeddeposit.fdpaymentcount') }}" >
                                    <i class="ti ti-file icon"></i>FD Payment Count
                                </a>
                                @endif
                                @if(in_array('cms.fixeddeposit.finalsavelog',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fixeddeposit.finalsavelog','cms.fixeddeposit.finalsavelogSearch'])) active @endif" href="{{ route('cms.fixeddeposit.finalsavelog') }}" >
                                    <i class="ti ti-file icon"></i>Final Save log
                                </a>
                                @endif
                                @if(in_array('cms.fixeddeposit.verify-penny-drop-log',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fixeddeposit.verify-penny-drop-log','cms.fixeddeposit.verify-penny-drop-log-search'])) active @endif" href="{{ route('cms.fixeddeposit.verify-penny-drop-log') }}" >
                                    <i class="ti ti-file icon"></i>Verify penny drop log
                                </a>
                                @endif
                                @if(in_array('cms.fixeddeposit.fdutmsourcelog',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fixeddeposit.fdutmsourcelog','cms.fixeddeposit.fdUtmSourceLogSearch'])) active @endif" href="{{ route('cms.fixeddeposit.fdutmsourcelog') }}" >
                                    <i class="ti ti-file icon"></i>FD Utm Source Logs
                                </a>
                                @endif
                                @if(in_array('cms.fixeddeposit.panverifylog',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fixeddeposit.panverifylog','cms.fixeddeposit.panverifylogsearch'])) active @endif" href="{{ route('cms.fixeddeposit.panverifylog') }}" >
                                    <i class="ti ti-file icon"></i>Pan Verify Logs
                                </a>
                                 @endif
                                 @if(in_array('cms.fixeddeposit.fetchpanlog',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fixeddeposit.fetchpanlog','cms.fixeddeposit.fetchpanlogsearch'])) active @endif" href="{{ route('cms.fixeddeposit.fetchpanlog') }}" >
                                    <i class="ti ti-file icon"></i>Pan Fetch Logs
                                </a>
                                @endif
                                @if(in_array('cms.fixeddeposit.panProfile',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fixeddeposit.panProfile'])) active @endif" href="{{ route('cms.fixeddeposit.panProfile') }}" >
                                    <i class="ti ti-file icon"></i>Pan Profile Fetch Logs
                                </a>
                                @endif
                                 @if(in_array('cms.fixeddeposit.nsdlpanverifyLog',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fixeddeposit.nsdlpanverifyLog'])) active @endif" href="{{ route('cms.fixeddeposit.nsdlpanverifyLog') }}" >
                                    <i class="ti ti-file icon"></i>NSDL Pan Verify Logs
                                </a>
                                @endif
                                @if(in_array('cms.fixeddeposit.fDPanFetchDetailsLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fixeddeposit.fDPanFetchDetailsLogs'])) active @endif" href="{{ route('cms.fixeddeposit.fDPanFetchDetailsLogs') }}" >
                                    <i class="ti ti-file icon"></i>Pan Fetch Details Log
                                </a>
                                @endif
                                @if(in_array('cms.fd.fdPushSmsLog',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fd.fdPushSmsLog'])) active @endif" href="{{ route('cms.fd.fdPushSmsLog') }}" >
                                    <i class="ti ti-file icon"></i>FD Push SMS Logs
                                </a>
                                @endif
                                @if(in_array('cms.fd.Payment',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fd.Payment'])) active @endif" href="{{ route('cms.fd.Payment') }}" >
                                    <i class="ti ti-file icon"></i>Payment
                                </a>
                                @endif
                                @if(in_array('cms.fixeddeposit.mobilerapidfetch',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fixeddeposit.mobilerapidfetch'])) active @endif" href="{{ route('cms.fixeddeposit.mobilerapidfetch') }}" >
                                    <i class="ti ti-file icon"></i>Rapid Fetch Logs
                                </a>
                                @endif
                                @if(in_array('cms.fd.Payment',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fd.fdleadparameter'])) active @endif" href="{{ route('cms.fd.fdleadparameter') }}" >
                                    <i class="ti ti-file icon"></i>FD Lead Params
                                </a>
                                @endif
                                @if(in_array('cms.fd.finalsavecron',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fd.finalsavecron'])) active @endif" href="{{ route('cms.fd.finalsavecron') }}" >
                                    <i class="ti ti-file icon"></i>FD Final Save Cron Logs
                                </a>
                                @endif
                                @if(in_array('cms.fd.agentinformation',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fd.agentinformation'])) active @endif" href="{{ route('cms.fd.agentinformation') }}" >
                                    <i class="ti ti-file icon"></i>FD Agent Information
                                </a>
                                @endif
                                @if(in_array('cms.paylead.payLeadsList',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.paylead.payLeadsList'])) active @endif" href="{{ route('cms.paylead.payLeadsList') }}" >
                                    <i class="ti ti-file icon"></i>Double Payment Leads Csv
                                </a>
                                @endif
                                @if(in_array('cms.overview.fd',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.overview.fd'])) active @endif" href="{{ route('cms.overview.fd') }}" >
                                    <i class="ti ti-file icon"></i>FD Over View
                                </a>
                                @endif
                                @if(in_array('cms.issuetracker.fd',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.issuetracker.fd'])) active @endif" href="{{ route('cms.issuetracker.fd') }}" >
                                    <i class="ti ti-file icon"></i>FD Issue Tracker
                                </a>
                                @endif

                                @if(in_array('cms.netcoremaillog.fd',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.netcoremaillog.fd'])) active @endif" href="{{ route('cms.netcoremaillog.fd') }}" >
                                    <i class="ti ti-file icon"></i>FD NetCoreMail Logs
                                </a>
                                @endif
                                @if(in_array('cms.fixeddeposit.fs-log',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fixeddeposit.fs-log','cms.fixeddeposit.fs-search'])) active @endif" href="{{ route('cms.fixeddeposit.fs-log') }}" >
                                    <i class="ti ti-file icon"></i>Final Save Polling
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>

                </li>
                <li class="nav-item dropdown @if(in_array(Route::currentRouteName(), ['cms.rd.rdLeads','cms.recurringdeposit.rd-mis-data','cms.recurringdeposit.rdMisSearch','cms.rdLog.invRDLogs','cms.invrd.cacheview','cms.invRD.paymentCount'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Fixed Investment Plan
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.rd.rdLeads','cms.recurringdeposit.rd-mis-data','cms.recurringdeposit.rdMisSearch','cms.rdLog.invRDLogs','cms.invrd.cacheview','cms.invRD.paymentCount'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.recurringdeposit.rd-mis-data',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.recurringdeposit.rd-mis-data'])) active @endif" href="{{ route('cms.recurringdeposit.rd-mis-data') }}" >
                                    <i class="ti ti-file icon"></i> FIP Mis
                                </a>
                                @endif
                                @if(in_array('cms.rdLog.invRDLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.rdLog.invRDLogs'])) active @endif" href="{{ route('cms.rdLog.invRDLogs') }}" >
                                    <i class="ti ti-file icon"></i> FIP INV LOGS
                                </a>
                                @endif
                                @if(in_array('cms.rdLog.invRDLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.rd.rdLeads'])) active @endif" href="{{ route('cms.rd.rdLeads') }}" >
                                    <i class="ti ti-file icon"></i> FIP INV Leads
                                </a>
                                @endif
                                @if(in_array('cms.rdLog.invRDLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.invrd.cacheview'])) active @endif" href="{{ route('cms.invrd.cacheview') }}" >
                                    <i class="ti ti-file icon"></i> INV CacheClear
                                </a>
                                @endif
                                @if(in_array('cms.rdLog.invRDLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.invRD.paymentCount'])) active @endif" href="{{ route('cms.invRD.paymentCount') }}" >
                                    <i class="ti ti-file icon"></i> FIP Payment Details
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown @if(in_array(Route::currentRouteName(), ['cms.rd.rdApiLogs','cms.rd.rdPaymentLogs','cms.rd.PaymentLogs','cms.rd.pollingPaymentLogs'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                            RD Installment Logs
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.rd.rdApiLogs','cms.rd.rdPaymentLogs','cms.rd.PaymentLogs','cms.rd.pollingPaymentLogs','cms.rd.rdApiLogsSearch','cms.rd.rdPaymentLogsSearch','cms.rd.paymentLogsSearch','cms.rd.pollingPaymentLogsSearch'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.up.upPayEmiApiLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.rd.rdApiLogs'])) active @endif" href="{{ route('cms.rd.rdApiLogs') }}" >
                                    <i class="ti ti-file icon"></i> Api Logs
                                </a>
                                @endif
                                @if(in_array('cms.up.upPayEmiPaymentLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.rd.rdPaymentLogs'])) active @endif" href="{{ route('cms.rd.rdPaymentLogs') }}" >
                                    <i class="ti ti-file icon"></i> Payment Logs
                                </a>
                                @endif
                                @if(in_array('cms.up.upPayEmiPaymentLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.rd.PaymentLogs'])) active @endif" href="{{ route('cms.rd.PaymentLogs') }}" >
                                    <i class="ti ti-file icon"></i> Payments
                                </a>
                                @endif
                                @if(in_array('cms.rd.pollingPaymentLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.rd.pollingPaymentLogs'])) active @endif" href="{{ route('cms.rd.pollingPaymentLogs') }}" >
                                    <i class="ti ti-file icon"></i> Polling Payment Logs
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown @if(in_array(Route::currentRouteName(), ['cms.rto.paralog', 'cms.rto.RtoLogsSearch', 'cms.rto.apilog', 'cms.rto.RtoLogsApiSearch'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                            RTO Logs
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.rto.paralog', 'cms.rto.RtoLogsSearch', 'cms.rto.apilog', 'cms.rto.RtoLogsApiSearch'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.rto.paralog',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.rto.paralog', 'cms.rto.RtoLogsSearch'])) active @endif" href="{{ route('cms.rto.paralog') }}" >
                                    <i class="ti ti-file icon"></i> Parameters Logs
                                </a>
                                @endif
                                @if(in_array('cms.rto.apilog',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.rto.apilog', 'cms.rto.RtoLogsApiSearch'])) active @endif" href="{{ route('cms.rto.apilog') }}" >
                                    <i class="ti ti-file icon"></i> API Logs
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown @if(in_array(Route::currentRouteName(), ['cms.postLogin.list','cms.postLoginLog.postloginloglist','cms.postLoginMisLog.postloginmisloglist','cms.postLoginPayment.payment_list','cms.postLoginexceptionMailLogs.exceptionMailLogslist','cms.postLoginSms.smsloglist','cms.getmpinupdate','cms.postLoginLog.postloginuseractivitylogs','cms.postLoginLog.getservicerequestlogsdata','cms.postLoginPaymentUsers.paymentusers','cms.postLoginPayment.cpRdPaymentLog','cms.postLoginPayment.cpRdPollingPaymentLog','','cms.postLoginLog.getservicerequestlogsdata','cms.postLoginLog.getservicerequestlogsdata','cms.postLogin.userAttemptsLog','cms.postLogin.postLoginEncryptAndDecrypt','cms.postLogin.viewuserDetails','cms.postLogin.viewuserDetails','cms.postLogin.viewuserLogs','cms.postLogin.viewuserSearchLogs','cms.postLogin.postLoginPaymentCount','cms.postLoginPageContent.list','cms.postLoginPayment.paymentListMySql','cms.postLogin.cpLockedUsers','cms.postLogin.postLoginRedisFlushDB','cms.postLogin.cpLeadLogs'])) active @endif">                    <a class="nav-link dropdown-toggle" href="{{ route('cms.postLogin.postLoginPaymentCount') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Customer Portal
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.postLogin.list','cms.postLoginLog.postloginloglist','cms.postLoginMisLog.postloginmisloglist','cms.postLoginPayment.payment_list','cms.postLoginexceptionMailLogs.exceptionMailLogslist','cms.postLoginSms.smsloglist','cms.getmpinupdate','cms.postLoginLog.postloginuseractivitylogs','cms.postLoginLog.getservicerequestlogsdata','cms.postLoginPaymentUsers.paymentusers','cms.postLoginPayment.cpRdPaymentLog','cms.postLoginPayment.cpRdPollingPaymentLog','cms.postLoginLog.getservicerequestlogsdata','cms.postLogin.userAttemptsLog','cms.postLogin.postLoginEncryptAndDecrypt','cms.postLogin.viewuserDetails','cms.postLogin.viewuserDetails','cms.postLogin.viewuserLogs','cms.postLogin.viewuserSearchLogs','cms.postLogin.postLoginPaymentCount','cms.postLoginPageContent.list','cms.postLoginPayment.paymentListMySql','cms.postLoginLog.cpUserLogs','cms.postLoginLog.cpUserLoginActivityLogs','cms.postLogin.cpLockedUsers','cms.postLogin.postLoginRedisFlushDB','cms.postLogin.cpLeadLogs'])) show @endif">
                         <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.postLogin.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.postLogin.list','cms.postLogin.viewuserDetails','cms.postLogin.viewuserDetails','cms.postLogin.viewuserLogs','cms.postLogin.viewuserSearchLogs','cms.postLoginLog.cpUserLoginActivityLogs'])) active @endif" href="{{ route('cms.postLogin.list') }}" >
                                    <i class="ti ti-file icon"></i>CP User Details
                                </a>
                                @endif
                                @if(in_array('cms.postLoginLog.cpUserLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.postLoginLog.cpUserLogs'])) active @endif" href="{{ route('cms.postLoginLog.cpUserLogs') }}" >
                                    <i class="ti ti-file icon"></i>CP User Logs
                                </a>
                                @endif
                                @if(in_array('cms.postLogin.cpLeadLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.postLogin.cpLeadLogs'])) active @endif" href="{{ route('cms.postLogin.cpLeadLogs') }}" >
                                    <i class="ti ti-file icon"></i>CP Lead Logs
                                </a>
                                @endif
                                @if(in_array('cms.postLoginLog.cpUserLoginActivityLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.postLoginLog.cpUserLoginActivityLogs'])) active @endif" href="{{ route('cms.postLoginLog.cpUserLoginActivityLogs') }}" >
                                    <i class="ti ti-file icon"></i>CP User Login Activity Logs
                                </a>
                                @endif
                                @if(in_array('cms.postLoginLog.postloginloglist',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.postLoginLog.postloginloglist'])) active @endif" href="{{ route('cms.postLoginLog.postloginloglist') }}" >
                                    <i class="ti ti-file icon"></i>CP Api's Log
                                </a>
                                @endif
                                @if(in_array('cms.postLoginMisLog.postloginmisloglist',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.postLoginMisLog.postloginmisloglist'])) active @endif" href="{{ route('cms.postLoginMisLog.postloginmisloglist') }}" >
                                    <i class="ti ti-file icon"></i>CP Mis Logs
                                </a>
                                @endif

                                @if(in_array('cms.postLoginPayment.paymentListMySql',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.postLoginPayment.paymentListMySql'])) active @endif" href="{{ route('cms.postLoginPayment.paymentListMySql') }}" >
                                    <i class="ti ti-file icon"></i>CP Payment Logs MySql
                                </a>
                                @endif
                                @if(in_array('cms.postLoginPayment.payment_list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.postLoginPayment.payment_list'])) active @endif" href="{{ route('cms.postLoginPayment.payment_list') }}" >
                                    <i class="ti ti-file icon"></i>CP Payment Logs Mongo
                                </a>
                                @endif
                                @if(in_array('cms.postLoginexceptionMailLogs.exceptionMailLogslist',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.postLoginexceptionMailLogs.exceptionMailLogslist'])) active @endif" href="{{ route('cms.postLoginexceptionMailLogs.exceptionMailLogslist') }}" >
                                    <i class="ti ti-file icon"></i>CP Exception Mail Logs
                                </a>
                                @endif
                                @if(in_array('cms.postLoginSms.smsloglist',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.postLoginSms.smsloglist'])) active @endif" href="{{ route('cms.postLoginSms.smsloglist') }}" >
                                    <i class="ti ti-file icon"></i>CP SMS Logs
                                </a>
                                @endif
                                @if(in_array('cms.getmpinupdate',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.getmpinupdate'])) active @endif" href="{{ route('cms.getmpinupdate') }}" >
                                    <i class="ti ti-file icon"></i>CP Mpin Update
                                </a>
                                @endif
                                @if(in_array('cms.postLoginLog.postloginuseractivitylogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.postLoginLog.postloginuseractivitylogs'])) active @endif" href="{{ route('cms.postLoginLog.postloginuseractivitylogs') }}" >
                                    <i class="ti ti-file icon"></i>CP User Activity Logs
                                </a>
                                @endif
                                @if(in_array('cms.postLogin.userAttemptsLog',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.postLogin.userAttemptsLog'])) active @endif" href="{{ route('cms.postLogin.userAttemptsLog') }}" >
                                    <i class="ti ti-file icon"></i>CP User Attempts Logs
                                </a>
                                @endif
                                @if(in_array('cms.postLoginLog.getservicerequestlogsdata',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.postLoginLog.getservicerequestlogsdata'])) active @endif" href="{{ route('cms.postLoginLog.getservicerequestlogsdata') }}" >
                                    <i class="ti ti-file icon"></i>CP Service Request Logs
                                </a>
                                @endif
                                @if(in_array('cms.postLoginPaymentUsers.paymentusers',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.postLoginPaymentUsers.paymentusers'])) active @endif" href="{{ route('cms.postLoginPaymentUsers.paymentusers') }}" >
                                    <i class="ti ti-file icon"></i>CP Payment Lists
                                </a>
                                @endif
                                @if(in_array('cms.postLoginPayment.cpRdPaymentLog',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.postLoginPayment.cpRdPaymentLog'])) active @endif" href="{{ route('cms.postLoginPayment.cpRdPaymentLog') }}" >
                                    <i class="ti ti-file icon"></i>CP RD Payment Lists
                                </a>
                                @endif
                                @if(in_array('cms.postLoginPayment.cpRdPollingPaymentLog',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.postLoginPayment.cpRdPollingPaymentLog'])) active @endif" href="{{ route('cms.postLoginPayment.cpRdPollingPaymentLog') }}" >
                                    <i class="ti ti-file icon"></i>CP RD Polling Payment Lists
                                </a>
                                @endif
                                @if(in_array('cms.postLoginPageContent.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.postLoginPageContent.list'])) active @endif" href="{{ route('cms.postLoginPageContent.list') }}" >
                                    <i class="ti ti-file icon"></i>CP Page Content
                                </a>
                                @endif
                                @if(in_array('cms.postLogin.postLoginEncryptAndDecrypt',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.postLogin.postLoginEncryptAndDecrypt'])) active @endif" href="{{ route('cms.postLogin.postLoginEncryptAndDecrypt') }}" >
                                    <i class="ti ti-file icon"></i>CP Encrypt And Decrypt
                                </a>
                                @endif
                                @if(in_array('cms.postLogin.postLoginRedisFlushDB',$rolePermission))
                                <a class="dropdown-item cos-pop-up-flush @if(in_array(Route::currentRouteName(), ['cms.postLogin.postLoginRedisFlushDB'])) active @endif" href="#" >
                                    <i class="ti ti-file icon"></i>CP Redis Flush
                                </a>
                                @endif

                                

                            </div>
                        </div>
                    </div>

                </li>

                <li class="nav-item dropdown @if(in_array(Route::currentRouteName(), ['cms.ap.ApiLogs','cms.ap.emailLogs','cms.ct.chargeCollectionTransactionLogs','cms.ct.chargeTransactionLogsSearch','cms.ct.chargeCollectionUploadLogs','cms.ct.chargeUploadLogsSearch','cms.sflLog.getsflservicerequestlogsdata','cms.ct.chargeCollectionLogs','cms.ct.appleadsLog','cms.ct.fdccpushLog','cms.ct.twccpushLog','cms.ct.fdccapiLog','cms.ct.twccapiLog'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                            API & Email Logs
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.ap.ApiLogs','cms.ap.emailLogs','cms.ct.chargeCollectionTransactionLogs','cms.ct.chargeTransactionLogsSearch','cms.ct.chargeCollectionUploadLogs','cms.ct.chargeUploadLogsSearch','cms.sflLog.getsflservicerequestlogsdata','cms.ct.chargeCollectionLogs','cms.ct.appleadsLog','cms.ct.fdccpushLog','cms.ct.twccpushLog','cms.ct.fdccapiLog','cms.ct.twccapiLog'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.ap.ApiLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.ap.ApiLogs'])) active @endif" href="{{ route('cms.ap.ApiLogs') }}" >
                                    <i class="ti ti-file icon"></i> Api Logs
                                </a>
                                @endif
                                @if(in_array('cms.ap.emailLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.ap.emailLogs'])) active @endif" href="{{ route('cms.ap.emailLogs') }}" >
                                    <i class="ti ti-file icon"></i> Email Logs
                                </a>
                                @endif
                                @if(in_array('cms.sflLog.getsflservicerequestlogsdata',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.sflLog.getsflservicerequestlogsdata'])) active @endif" href="{{ route('cms.sflLog.getsflservicerequestlogsdata') }}" >
                                    <i class="ti ti-file icon"></i>SFL Service Request Logs
                                </a>
                                @endif
                                @if(in_array('cms.sflLog.getsflservicerequestqrlogsdata',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.sflLog.getsflservicerequestqrlogsdata'])) active @endif" href="{{ route('cms.sflLog.getsflservicerequestqrlogsdata') }}" >
                                    <i class="ti ti-file icon"></i>SFL Service Request QR Logs
                                </a>
                                @endif
                                @if(in_array('cms.ct.chargeCollectionLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.ct.chargeCollectionLogs'])) active @endif" href="{{ route('cms.ct.chargeCollectionLogs') }}" >
                                    <i class="ti ti-file icon"></i> Charge Collection Logs
                                </a>
                                @endif
                                @if(in_array('cms.ct.chargeCollectionUploadLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.ct.chargeCollectionUploadLogs'])) active @endif" href="{{ route('cms.ct.chargeCollectionUploadLogs') }}" >
                                    <i class="ti ti-file icon"></i> Charge Collection Upload Logs
                                </a>
                                @endif
                                @if(in_array('cms.ct.chargeCollectionTransactionLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.ct.chargeCollectionTransactionLogs'])) active @endif" href="{{ route('cms.ct.chargeCollectionTransactionLogs') }}" >
                                    <i class="ti ti-file icon"></i> Charge Collection Transaction Logs
                                </a>
                                @endif
                                @if(in_array('cms.ct.appleadsLog',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.ct.appleadsLog'])) active @endif" href="{{ route('cms.ct.appleadsLog') }}" >
                                    <i class="ti ti-file icon"></i> Super App Leads
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown @if(in_array(Route::currentRouteName(), ['cms.pl.plLoanIndex', 'cms.gl.glLoanIndex', 'cms.pl.plCcIndex', 'cms.gl.glCcIndex','cms.pl.plStatusIndex','cms.gl.glStatusIndex', 'cms.lum.lumenLog', 'cms.pl.plLoanCreation','cms.fd.fdPaymentRevIndex','cms.cos.cosPaymentIndex', 'cms.tw.twCcIndex', 'cms.tw.twCcPush', 'cms.tw.twUpdateVoucherStatus', 'cms.fw.fwCcIndex', 'cms.fw.fwCcPush','cms.rd.rdPaymentIndex','cms.fd.fddigitaltxnidPaymentRevIndex','cms.fd.fdFinalsaveIndex','cms.fd.fdFinalsavebulkIndex','cms.fd.fdCcIndex' ,'cms.payment.paymentModeIndex' ,'cms.payment.updatePaymentMode','cms.newgl.glCcIndex'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Manual Cron
                        </span>
                    </a>

                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.pl.plLoanIndex', 'cms.gl.glLoanIndex','cms.pl.plCcIndex', 'cms.gl.glCcIndex','cms.pl.plStatusIndex','cms.gl.glStatusIndex', 'cms.lum.lumenLog', 'cms.pl.plLoanCreation','cms.fd.fdPaymentRevIndex','cms.cos.cosPaymentIndex', 'cms.tw.twCcIndex', 'cms.tw.twCcPush', 'cms.tw.twUpdateVoucherStatus', 'cms.fw.fwCcIndex', 'cms.fw.fwCcPush','cms.rd.rdPaymentIndex','cms.fd.fddigitaltxnidPaymentRevIndex','cms.fd.fdFinalsaveIndex','cms.fd.fdFinalsavebulkIndex','cms.fd.fdCcIndex','cms.payment.paymentModeIndex','cms.payment.updatePaymentMode','cms.newgl.glCcIndex'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.pl.plLoanIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.pl.plLoanIndex'])) active @endif" href="{{ route('cms.pl.plLoanIndex') }}" >
                                    <i class="ti ti-file icon"></i> PL Loan Creation
                                </a>
                                @endif
                                @if(in_array('cms.gl.glLoanIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.gl.glLoanIndex'])) active @endif" href="{{ route('cms.gl.glLoanIndex') }}" >
                                    <i class="ti ti-file icon"></i> GL Loan Creation
                                </a>
                                @endif
                                @if(in_array('cms.pl.plCcIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.pl.plCcIndex'])) active @endif" href="{{ route('cms.pl.plCcIndex') }}" >
                                    <i class="ti ti-file icon"></i> PL CC Push
                                </a>
                                @endif
                                @if(in_array('cms.gl.glCcIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.gl.glCcIndex'])) active @endif" href="{{ route('cms.gl.glCcIndex') }}" >
                                    <i class="ti ti-file icon"></i> GL CC Push
                                </a>
                                @endif
                                @if(in_array('cms.pl.plStatusIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.pl.plStatusIndex'])) active @endif" href="{{ route('cms.pl.plStatusIndex') }}" >
                                    <i class="ti ti-file icon"></i> PL Status Check
                                </a>
                                @endif
                                @if(in_array('cms.gl.glStatusIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.gl.glStatusIndex'])) active @endif" href="{{ route('cms.gl.glStatusIndex') }}" >
                                    <i class="ti ti-file icon"></i> GL Status Check
                                </a>
                                @endif
                                @if(in_array('cms.tw.twCcIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.tw.twCcIndex'])) active @endif" href="{{ route('cms.tw.twCcIndex') }}" >
                                    <i class="ti ti-file icon"></i> TW CC Push
                                </a>
                                @endif
                                @if(in_array('cms.tw.twUpdateVoucherStatus',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.tw.twUpdateVoucherStatus'])) active @endif" href="{{ route('cms.tw.twUpdateVoucherStatus') }}" >
                                    <i class="ti ti-file icon"></i> TW Update Voucher Status
                                </a>
                                @endif
                                @if(in_array('cms.fw.fwCcIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fw.fwCcIndex'])) active @endif" href="{{ route('cms.fw.fwCcIndex') }}" >
                                    <i class="ti ti-file icon"></i> FW CC Push
                                </a>
                                @endif
                                @if(in_array('cms.lum.lumenLog',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.lum.lumenLog'])) active @endif" href="{{ route('cms.lum.lumenLog') }}" >
                                    <i class="ti ti-file icon"></i> Lumen Logs
                                </a>
                                @endif
                                @if(in_array('cms.fd.fdCcIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fd.fdCcIndex'])) active @endif" href="{{ route('cms.fd.fdCcIndex') }}" >
                                    <i class="ti ti-file icon"></i> FD CC Push
                                </a>
                                @endif
                                @if(in_array('cms.fd.fdPaymentRevIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fd.fdPaymentRevIndex'])) active @endif" href="{{ route('cms.fd.fdPaymentRevIndex') }}" >
                                    <i class="ti ti-file icon"></i> FD Reverse Payment Cron
                                </a>
                                @endif
                                @if(in_array('cms.fd.fddigitaltxnPaymentupdate',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fd.fddigitaltxnidPaymentRevIndex'])) active @endif" href="{{ route('cms.fd.fddigitaltxnidPaymentRevIndex') }}" >
                                    <i class="ti ti-file icon"></i> FD Digital Taxn ID Reverse Payment Cron
                                </a>
                                @endif
                                @if(in_array('cms.fd.fdmisdigitaltxnPaymentupdate',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fd.fddigitaltxnidPaymentRevIndex'])) active @endif" href="{{ route('cms.fd.fdmisdigitaltxnidPaymentRevIndex') }}" >
                                    <i class="ti ti-file icon"></i> FD Mis Digital Taxn ID Reverse Payment Cron
                                </a>
                                @endif
                                @if(in_array('cms.rd.rdPaymentIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.rd.rdPaymentIndex'])) active @endif" href="{{ route('cms.rd.rdPaymentIndex') }}" >
                                    <i class="ti ti-file icon"></i> RD Reverse Payment Cron
                                </a>
                                @endif
                                @if(in_array('cms.cos.cosPaymentIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.cos.cosPaymentIndex'])) active @endif" href="{{ route('cms.cos.cosPaymentIndex') }}" >
                                    <i class="ti ti-file icon"></i> COS RD Reverse Payment Cron
                                </a>
                                @endif
                                @if(in_array('cms.fd.fdFinalsaveIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fd.fdFinalsaveIndex'])) active @endif" href="{{ route('cms.fd.fdFinalsaveIndex') }}" >
                                    <i class="ti ti-file icon"></i> Final Save Cron
                                </a>
                                @endif
                                @if(in_array('cms.fd.fdFinalsavebulkIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fd.fdFinalsavebulkIndex'])) active @endif" href="{{ route('cms.fd.fdFinalsavebulkIndex') }}" >
                                    <i class="ti ti-file icon"></i> Final Save Bulk Cron
                                </a>
                                @endif
                                @if(in_array('cms.newgl.glCcIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.newgl.glCcIndex'])) active @endif" href="{{ route('cms.newgl.glCcIndex') }}" >
                                    <i class="ti ti-file icon"></i> New GL CC PUSH
                                </a>
                                @endif
                                @if(in_array('cms.bcl.blVoucherIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.bcl.blVoucherIndex'])) active @endif" href="{{ route('cms.bcl.blVoucherIndex') }}" >
                                    <i class="ti ti-file icon"></i> BCL Voucher Insertion
                                </a>
                                @endif
                                @if(in_array('cms.payment.paymentModeIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.payment.paymentModeIndex'])) active @endif" href="{{ route('cms.payment.paymentModeIndex') }}" >
                                    <i class="ti ti-file icon"></i> Switch Payment Mode
                                </a>
                                @endif  
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown @if(in_array(Route::currentRouteName(), ['cms.gl.gltLeadMaster','cms.gl.glLoanSettle','cms.pl.plLeadMaster','cms.pl.leaddocumentList','cms.tw.twIndex','cms.tw.twElIndex','cms.fw.fwIndex','cms.fd.fdMasterLog','cms.ld.ldManualPush','cms.logs.apilogcount','cms.logs.stagelogcount','cms.user.blockuser','cms.bcl.bclIndex','cms.logs.internalApilogcount'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Online Products
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.gl.gltLeadMaster','cms.gl.glLoanSettle','cms.pl.plLeadMaster','cms.pl.leaddocumentList','cms.tw.twIndex','cms.tw.twElIndex','cms.fw.fwIndex','cms.fd.fdMasterLog','cms.ld.ldManualPush','cms.logs.apilogcount','cms.logs.stagelogcount','cms.user.blockuser','cms.bcl.bclIndex','cms.logs.internalApilogcount'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.gl.gltLeadMaster',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.gl.gltLeadMaster'])) active @endif" href="{{ route('cms.gl.gltLeadMaster') }}" >
                                    <i class="ti ti-file icon"></i> Gold Loan
                                </a>
                                @endif
                                @if(in_array('cms.gl.glLoanSettle',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.gl.glLoanSettle'])) active @endif" href="{{ route('cms.gl.glLoanSettle') }}" >
                                    <i class="ti ti-file icon"></i> Gold Loan Settled
                                </a>
                                @endif
                                <!-- @if(in_array('cms.pl.plLeadMaster',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.pl.plLeadMaster'])) active @endif" href="{{ route('cms.pl.plLeadMaster') }}" >
                                    <i class="ti ti-file icon"></i> Personal Loan
                                </a>
                                @endif -->
                                <!-- @if(in_array('cms.pl.leaddocumentList',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), [ 'cms.pl.leaddocumentList'])) active @endif" href="{{ route('cms.pl.leaddocumentList') }}" >
                                    <i class="ti ti-file icon"></i> PL Leads Download
                                </a>
                                @endif -->
                                @if(in_array('cms.tw.twIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.tw.twIndex'])) active @endif" href="{{ route('cms.tw.twIndex') }}" >
                                    <i class="ti ti-file icon"></i> Two Wheeler Loan
                                </a>
                                @endif
                                @if(in_array('cms.tw.twOlaIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.tw.twOlaIndex'])) active @endif" href="{{ route('cms.tw.twOlaIndex') }}" >
                                    <i class="ti ti-file icon"></i> Two Wheeler Ola
                                </a>
                                @endif
                                @if(in_array('cms.tw.twOlaSuccessList',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.tw.twOlaSuccessList'])) active @endif" href="{{ route('cms.tw.twOlaSuccessList') }}" >
                                    <i class="ti ti-file icon"></i> Ola Success Report
                                </a>
                                @endif
                                @if(in_array('cms.tw.twElIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.tw.twElIndex'])) active @endif" href="{{ route('cms.tw.twElIndex') }}" >
                                    <i class="ti ti-file icon"></i> Express Two Wheeler
                                </a>
                                @endif
                                @if(in_array('cms.fw.fwIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fw.fwIndex'])) active @endif" href="{{ route('cms.fw.fwIndex') }}" >
                                    <i class="ti ti-file icon"></i> Four Wheeler Loan
                                </a>
                                @endif
                                @if(in_array('cms.fd.fdMasterLog',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fd.fdMasterLog'])) active @endif" href="{{ route('cms.fd.fdMasterLog') }}" >
                                    <i class="ti ti-file icon"></i> Fixed Deposit
                                </a>
                                @endif
                                @if(in_array('cms.logs.apilogcount',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.logs.apilogcount'])) active @endif @if(!in_array('cms.logs.apilogcount',$rolePermission)) hidden @endif" href="{{ route('cms.logs.apilogcount') }}" >
                                    <i class="ti ti-file icon"></i> External Api Log Count
                                </a>
                                @endif
                                @if(in_array('cms.logs.internalApilogcount',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.logs.internalApilogcount'])) active @endif @if(!in_array('cms.logs.internalApilogcount',$rolePermission)) hidden @endif" href="{{ route('cms.logs.internalApilogcount') }}" >
                                    <i class="ti ti-file icon"></i> Internal Api Log Count
                                </a>
                                @endif
                                @if(in_array('cms.logs.stagelogcount',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.logs.stagelogcount'])) active @endif @if(!in_array('cms.logs.stagelogcount',$rolePermission)) hidden @endif" href="{{ route('cms.logs.stagelogcount') }}" >
                                    <i class="ti ti-file icon"></i> Stage Log Count
                                </a>
                                @endif
                                @if(in_array('cms.user.blockuser',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.user.blockuser'])) active @endif @if(!in_array('cms.user.blockuser',$rolePermission)) hidden @endif" href="{{ route('cms.user.blockuser') }}" >
                                    <i class="ti ti-file icon"></i> Block User
                                </a>
                                @endif
                                @if(in_array('cms.ld.ldManualPush',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.ld.ldManualPush'])) active @endif" href="{{ route('cms.ld.ldManualPush') }}" >
                                    <i class="ti ti-file icon"></i> Manual Lead Push
                                </a>
                                @endif
                                @if(in_array('cms.bcl.bclIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.bcl.bclIndex'])) active @endif" href="{{ route('cms.bcl.bclIndex') }}" >
                                    <i class="ti ti-file icon"></i> Free Collateral Business Loan
                                </a>
                                @endif
                                @if(in_array('cms.ncl.leadsList',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.ncl.leadsList'])) active @endif" href="{{ route('cms.ncl.leadsList') }}" >
                                    <i class="ti ti-file icon"></i> New Car Loan
                                </a>
                                @endif
                                @if(in_array('cms.gl.glLeads',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.gl.glLeads'])) active @endif" href="{{ route('cms.gl.glLeads') }}" >
                                    <i class="ti ti-file icon"></i> New Gold Loan
                                </a>
                                @endif
                                @if(in_array('cms.msme.msmeIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.msme.msmeIndex']))active @endif" href="{{ route('cms.msme.msmeIndex')}}">
                                    <i class="ti ti-file icon"></i> Msme Loan
                                </a>
                                @endif
                                @if(in_array('cms.trade.tradeIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.trade.tradeIndex'])) active @endif" href="{{ route('cms.trade.tradeIndex') }}" >
                                    <i class="ti ti-file icon"></i> Trade Finance Loan
                                </a>
                                @endif
                                @if(in_array('cms.scfl.scflIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.scfl.scflIndex'])) active @endif"href="{{ route('cms.scfl.scflIndex') }}">
                                    <i class="ti ti-file icon"></i>Supply Chain Finance Loan
                                </a>
                                @endif

                                @if(in_array('cms.gbl.gblIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.gbl.gblIndex'])) active @endif" href="{{ route('cms.gbl.gblIndex') }}" >
                                    <i class="ti ti-file icon"></i> GST Business Loan
                                </a>
                                @endif

                                @if(in_array('cms.lfwe.lfweIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.lfwe.lfweIndex'])) active @endif" href="{{ route('cms.lfwe.lfweIndex') }}" >
                                    <i class="ti ti-file icon"></i> LFWE Loan
                                </a>
                                @endif

                                @if(in_array('cms.wcl.wclIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.wcl.wclIndex'])) active @endif"href="{{ route('cms.wcl.wclIndex') }}">
                                    <i class="ti ti-file icon"></i>Working Capital Loan for Businesses
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>

                {{-- CHR START --}}
                <li class="nav-item dropdown @if(in_array(Route::currentRouteName(), ['cms.chr.list','cms.chr.logs'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                            CHR
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.chr.list','cms.chr.logs'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.chr.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.chr.list'])) active @endif"href="{{ route('cms.chr.list') }}">
                                    <i class="ti ti-file icon"></i>CHR List
                                </a>
                                @endif
                                @if(in_array('cms.chr.logs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.chr.logs'])) active @endif"href="{{ route('cms.chr.logs') }}">
                                    <i class="ti ti-file icon"></i>CHR Logs
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>
                 {{-- CHR END --}}

                <li class="nav-item dropdown @if(in_array(Route::currentRouteName(), ['cms.fd.interest-rate-list'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Fixed Deposit
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.fd.interest-rate-list'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.fd.interest-rate-list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.fd.interest-rate-list'])) active @endif" href="{{ route('cms.fd.interest-rate-list')}}" >
                                    <i class="ti ti-file icon"></i> FD Interest Rates
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown @if(in_array(Route::currentRouteName(), ['cms.rd.rdLeads','cms.recurringdeposit.rd-mis-data','cms.recurringdeposit.rdMisSearch','cms.rdLog.invRDLogs','cms.invrd.cacheview','cms.invRD.paymentCount'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Fixed Investment Plan
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.rd.rdLeads','cms.recurringdeposit.rd-mis-data','cms.recurringdeposit.rdMisSearch','cms.rdLog.invRDLogs','cms.invrd.cacheview','cms.invRD.paymentCount'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.recurringdeposit.rd-mis-data',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.recurringdeposit.rd-mis-data'])) active @endif" href="{{ route('cms.recurringdeposit.rd-mis-data') }}" >
                                    <i class="ti ti-file icon"></i> FIP Mis
                                </a>
                                @endif
                                @if(in_array('cms.rdLog.invRDLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.rdLog.invRDLogs'])) active @endif" href="{{ route('cms.rdLog.invRDLogs') }}" >
                                    <i class="ti ti-file icon"></i> FIP INV LOGS
                                </a>
                                @endif
                                @if(in_array('cms.rdLog.invRDLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.rd.rdLeads'])) active @endif" href="{{ route('cms.rd.rdLeads') }}" >
                                    <i class="ti ti-file icon"></i> FIP INV Leads
                                </a>
                                @endif
                                @if(in_array('cms.rdLog.invRDLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.invrd.cacheview'])) active @endif" href="{{ route('cms.invrd.cacheview') }}" >
                                    <i class="ti ti-file icon"></i> INV CacheClear
                                </a>
                                @endif
                                @if(in_array('cms.rdLog.invRDLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.invRD.paymentCount'])) active @endif" href="{{ route('cms.invRD.paymentCount') }}" >
                                    <i class="ti ti-file icon"></i> FIP Payment Details
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown @if(in_array(Route::currentRouteName(), ['cms.dr.drIndex','cms.dr.drLeadIndex','cms.dr.drPaymentIndex','cms.dr.drUserIndex','cms.dr.drCrmPushIndex','cms.dr.drContactIndex','cms.dr.drDepositIndex','cms.dw.dwDownloadMaster'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-download icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Downloads
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.dr.drIndex','cms.dr.drLeadIndex','cms.dr.drPaymentIndex','cms.dr.drUserIndex','cms.dr.drCrmPushIndex','cms.dr.drContactIndex','cms.dr.drDepositIndex','cms.dw.dwDownloadMaster'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.dr.drIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.dr.drIndex'])) active @endif" href="{{ route('cms.dr.drIndex') }}" ><i class="ti ti-file icon"></i> Lead Details
                                </a>
                                @endif
                                @if(in_array('cms.dr.drLeadIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.dr.drLeadIndex'])) active @endif" href="{{ route('cms.dr.drLeadIndex') }}" ><i class="ti ti-file icon"></i> UTM Details
                                </a>
                                @endif
                                @if(in_array('cms.dr.drPaymentIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.dr.drPaymentIndex'])) active @endif" href="{{ route('cms.dr.drPaymentIndex') }}" ><i class="ti ti-file icon"></i> Payment Log Details
                                </a>
                                @endif
                                @if(in_array('cms.dr.drUserIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.dr.drUserIndex'])) active @endif" href="{{ route('cms.dr.drUserIndex') }}" ><i class="ti ti-file icon"></i> User Details
                                </a>
                                @endif
                                @if(in_array('cms.dr.drCrmPushIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.dr.drCrmPushIndex'])) active @endif" href="{{ route('cms.dr.drCrmPushIndex') }}" ><i class="ti ti-file icon"></i> Crm Push Log Details
                                </a>
                                @endif
                                @if(in_array('cms.dr.drDepositIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.dr.drDepositIndex'])) active @endif" href="{{ route('cms.dr.drDepositIndex') }}" ><i class="ti ti-file icon"></i> Deposit Log Details
                                </a>
                                @endif
                                @if(in_array('cms.dr.drContactIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.dr.drContactIndex'])) active @endif" href="{{ route('cms.dr.drContactIndex') }}" ><i class="ti ti-file icon"></i> Contact Us Details
                                </a>
                                @endif
                                <!-- @if(in_array('cms.dw.dwDownloadMaster',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.dw.dwDownloadMaster'])) active @endif" href="{{ route('cms.dw.dwDownloadMaster') }}" ><i class="ti ti-file icon"></i> PL Downloads
                                </a>
                                @endif -->
                            </div>
                        </div>
                    </div>
                </li>

                @if(in_array('cms.reports.report',$rolePermission))
                <li class="nav-item dropdown @if(in_array(Route::currentRouteName(), ['cms.reports.report'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Reports
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.reports.report'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.reports.report'])) @endif" href="{!! route('cms.reports.report', ['product' => 'fd']) !!}" ><i class="ti ti-file icon"></i>FD</a>
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.reports.report'])) @endif" href="{!! route('cms.reports.report', ['product' => 'rd']) !!}" ><i class="ti ti-file icon"></i>RD</a>
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.reports.report'])) @endif" href="{!! route('cms.reports.report', ['product' => 'pl']) !!}" ><i class="ti ti-file icon"></i>PL</a>
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.reports.report'])) @endif" href="{!! route('cms.reports.report', ['product' => 'glt']) !!}" ><i class="ti ti-file icon"></i>GLT</a>
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.reports.report'])) @endif" href="{!! route('cms.reports.report', ['product' => 'bcl']) !!}" ><i class="ti ti-file icon"></i>BCL</a>
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.reports.report'])) @endif" href="{!! route('cms.reports.report', ['product' => 'tw']) !!}" ><i class="ti ti-file icon"></i>TW</a>
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.reports.report'])) @endif" href="{!! route('cms.reports.report', ['product' => 'fw']) !!}" ><i class="ti ti-file icon"></i>FW</a>
                            </div>
                        </div>
                    </div>
                </li>
                @endif

                <li class="nav-item dropdown @if(in_array(Route::currentRouteName(), ['cms.up.upPayEmiApiLogs','cms.up.upPayEmiPaymentLogs','cms.up.upPayments','cms.up.upPaystatusLogs','cms.up.unifiedPaymentList','cms.up.loadUnifiedPaymentLogs','cms.up.viewUnifiedPayLog','cms.up.upoverallreport'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Unified Pay Emi Logs
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.up.upPayEmiApiLogs','cms.up.upPayEmiPaymentLogs','cms.up.upPayments','cms.up.upPaystatusLogs','cms.up.unifiedPaymentList','cms.up.loadUnifiedPaymentLogs','cms.up.viewUnifiedPayLog'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.up.upPayEmiApiLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.up.upPayEmiApiLogs'])) active @endif" href="{{ route('cms.up.upPayEmiApiLogs') }}" >
                                    <i class="ti ti-file icon"></i> Api Logs
                                </a>
                                @endif
                                @if(in_array('cms.up.upPayEmiPaymentLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.up.upPayEmiPaymentLogs'])) active @endif" href="{{ route('cms.up.upPayEmiPaymentLogs') }}" >
                                    <i class="ti ti-file icon"></i> Payment Logs
                                </a>
                                @endif
                                @if(in_array('cms.up.upPayments',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.up.upPayments'])) active @endif" href="{{ route('cms.up.upPayments') }}" >
                                    <i class="ti ti-file icon"></i> Unified Payment Logs
                                </a>
                                @endif
                                @if(in_array('cms.up.unifiedPaymentList',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.up.unifiedPaymentList'])) active @endif" href="{{ route('cms.up.unifiedPaymentList') }}" >
                                    <i class="ti ti-file icon"></i> Unified Payment Logs Count
                                </a>
                                @endif
                                @if(in_array('cms.up.upPaystatusLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.up.upPaystatusLogs'])) active @endif" href="{{ route('cms.up.upPaystatusLogs') }}" >
                                    <i class="ti ti-file icon"></i> Update Status Logs
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item @if(in_array(Route::currentRouteName(), ['cms.sme.list'])) active @endif">
                    @if(in_array('cms.sme.list',$rolePermission))
                    <a class="nav-link" href="{{ route('cms.sme.list') }}" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Business Loan
                        </span>
                    </a>
                    @endif
                </li>

                {{-- <li class="nav-item dropdown @if(in_array(Route::currentRouteName(), ['cms.redis.flushdb', 'cms.redis.flushcache'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Redis
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.redis.flushdb'])) show @endif"  href="{{ route('cms.redis.flushdb') }}">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.redis.flushdb',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.redis.flushdb'])) active @endif"  href="{{ route('cms.redis.flushdb') }}" >
                                    <i class="ti ti-file icon"></i> Redis Flush DB
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li> --}}

                <li class="nav-item @if(in_array(Route::currentRouteName(), ['cms.headermenus.list','cms.headermenus.add','cms.headermenus.edit','cms.headermenus.view', 'cms.headermenus.search'])) active @endif">
                    @if(in_array('cms.headermenus.list',$rolePermission))
                    <a class="nav-link" href="{{ route('cms.headermenus.list') }}" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-logout icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Header Menu
                        </span>
                    </a>
                    @endif
                </li>

                <li class="nav-item dropdown @if(in_array(Route::currentRouteName(), ['cms.personalloan.pennydropStatus','cms.goldloan.pennydropStatus'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Utility
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.goldloan.pennydropStatus',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.personalloan.pennydropStatus'])) active @endif" href="{{ route('cms.personalloan.pennydropStatus') }}" >
                                    <i class="ti ti-file icon"></i> PL Pennydrop Status Update
                                </a>
                                @endif
                                @if(in_array('cms.goldloan.pennydropStatus',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.goldloan.pennydropStatus'])) active @endif" href="{{ route('cms.goldloan.pennydropStatus') }}" >
                                    <i class="ti ti-file icon"></i> GL Pennydrop Status Update
                                </a>
                                @endif
                                @if(in_array('cms.personalloan.plStatusUpdate',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.personalloan.plStatusUpdate'])) active @endif" href="{{ route('cms.personalloan.plStatusUpdate') }}" >
                                    <i class="ti ti-file icon"></i> PL Link Reset Update
                                </a>
                                @endif
                                @if(in_array('cms.goldloan.glStatusUpdate',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.goldloan.glStatusUpdate'])) active @endif" href="{{ route('cms.goldloan.glStatusUpdate') }}" >
                                    <i class="ti ti-file icon"></i> GL Link Reset Update
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>
                 <li class="nav-item @if(in_array(Route::currentRouteName(), ['cms.file.index' ,'cms.file.list','cms.file.delete','cms.file.deleteall'])) active @endif">
                    @if(in_array('cms.file.index',$rolePermission))
                    <a class="nav-link" href="{{ route('cms.file.index') }}" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Uploaded File View
                        </span>
                    </a>
                    @endif
                </li>

                <li  class="nav-item dropdown  @if(in_array(Route::currentRouteName(), ['cms.session.sessionLogs','cms.session.sessionSearch','cms.session.portfolioLogs','cms.session.getuserSessionLogsDownload'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                            User Session Activity
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.session.sessionLogs','cms.session.sessionSearch','cms.session.portfolioLogs','cms.session.getuserSessionLogsDownload'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.session.sessionLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.session.sessionLogs','cms.session.sessionSearch','cms.session.getuserSessionLogsDownload'])) active @endif" href="{{ route('cms.session.sessionLogs') }}" >
                                    <i class="ti ti-file icon"></i> User Session Activity List
                                </a>
                                @endif
                                @if(in_array('cms.session.portfolioLogs',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.session.portfolioLogs'])) active @endif" href="{{ route('cms.session.portfolioLogs') }}" >
                                    <i class="ti ti-file icon"></i> User Portfolio List
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>

                <li  class="nav-item dropdown  @if(in_array(Route::currentRouteName(), ['cms.email-trigger-api.list','cms.email-trigger-api.add','cms.email-trigger-api.save','cms.email-trigger-api.edit','cms.email-trigger-api.update','cms.email-trigger-api.view','cms.email-trigger-api.search','cms.email-trigger-api.status'])) active @endif">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-package icon"></i>
                        </span>
                        <span class="nav-link-title">
                           Email Trigger Details
                        </span>
                    </a>
                    <div class="dropdown-menu @if(in_array(Route::currentRouteName(), ['cms.email-trigger-api.list','cms.email-trigger-api.add','cms.email-trigger-api.save','cms.email-trigger-api.edit','cms.email-trigger-api.update','cms.email-trigger-api.view','cms.email-trigger-api.search','cms.email-trigger-api.status'])) show @endif">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                @if(in_array('cms.email-trigger-api.list',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.email-trigger-api.list','cms.email-trigger-api.add','cms.email-trigger-api.save','cms.email-trigger-api.edit','cms.email-trigger-api.update','cms.email-trigger-api.view','cms.email-trigger-api.search','cms.email-trigger-api.status'])) active @endif" href="{{ route('cms.email-trigger-api.list') }}" >
                                    <i class="ti ti-file icon"></i> Email Trigger API List
                                </a>
                                @endif
                                @if(in_array('cms.email-trigger-logs.emailLogsIndex',$rolePermission))
                                <a class="dropdown-item @if(in_array(Route::currentRouteName(), ['cms.email-trigger-logs.emailLogsIndex'])) active @endif"href="{{ route('cms.email-trigger-logs.emailLogsIndex') }}">
                                    <i class="ti ti-file icon"></i> Email Tigger Logs
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    @if(in_array('cms.users.logout',$rolePermission))
                    <a class="nav-link" href="{{ route('cms.users.logout') }}" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-logout icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Logout
                        </span>
                    </a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</aside>
<header class="navbar navbar-expand-md navbar-light d-none d-lg-flex d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"> <span class="navbar-toggler-icon"></span> </button>
        <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item mx-2">
                <b>{!! Form::submit('REDIS FLUSH', ['class' => 'btn btn-warning pop-up-flush','style'=>'padding: 13px;box-shadow: none;']) !!}</b>
            </div>
            <div class="nav-item mx-2 badge badge-light">
                <b>Last Login:</b>{{ Auth::user()->last_login }}
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu" aria-expanded="false">
                    <span class="avatar avatar-sm">
                        <i class="ti ti-user-circle icon"></i>
                    </span>
                    <div class="d-none d-xl-block ps-2">
                        <div>{{ Auth::user()->name }}</div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <!-- <div class="p-2">
                        @if(empty(Auth::user()->roles) === false)
                            <b>Roles</b>
                            <ul class="list-unstyled">
                                @foreach(Auth::user()->roles as $role)
                                    <li><span class="badge badge-secondary">{{{ $role->name }}}</span></li>
                                @endforeach
                            </ul>
                        @endif
                    </div> -->
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('cms.users.logout') }}" class="dropdown-item">Logout</a>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <div>
                @section('page_action') @show
            </div>
        </div>
    </div>
</header>

<?php get_header(); ?>
<?php /*if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
</header>
<div class="entry-content" itemprop="mainContentOfPage">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>

<div class="entry-links"><?php wp_link_pages(); ?></div>
</div>
</article>
<?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
<?php get_footer(); */ ?>

<!--wrapper-->
<div class="wrapper">

    <!--header-->
    <header class="header">
                <div class="header-fixed">
            <a href="/" class="header-logo">
                <img src="https://www.mazumamoney.co.uk/app/themes/v1/images/mazuma-mark.svg" alt="Mazuma">
            </a>
                                           
                <a href="/get-a-quote" class="header-quote">
                <span>
                                    Call Now
                                <span class="svg-flair">
                        <svg xmlns="http://www.w3.org/2000/svg" width="93" height="8" viewBox="0 0 93 8"><path d="M80.712 2.355c3.067.131 6.05 1.08 9.144.911 1.235-.066 2.255.62 2.665 1.96.21.727.192 1.38-.386 1.91-.538.498-1.163.7-1.912.477-1.312-.394-2.621-.957-3.964-1.099a546.835 546.835 0 00-15.671-1.406c-3.351-.256-6.71-.383-10.077-.508-4.044-.152-8.1-.275-12.154-.346-5.632-.099-11.264-.185-16.9-.18-2.57.002-5.15.156-7.704.385-4.822.428-9.633.994-14.449 1.433-1.866.169-3.75.124-5.625.216-1.652.08-2.505-.89-3.163-2.22C.132 3.124.35 2.57.893 2.037c.532-.52 1.168-.73 1.895-.618 2.973.456 5.94.172 8.88-.18C15.12.829 18.567.885 22.026.839 27.562.764 33.098.64 38.636.63c2.969-.006 5.93.188 8.895.286 3.06.1 6.124.177 9.183.293 3.851.146 7.709.302 11.555.486 4.153.202 8.3.439 12.443.66" fill="#10D7B1" fill-rule="evenodd"></path></svg>
                    </span>
                </span>
                </a>
                        <div class="header-opts">
                <button class="burger">
                    <span class="burger-toggle"><span></span></span>
                    Toggle Menu
                </button><!--burger-->
            </div>
        </div>
        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <a href="/" class="header-logo">
                            <img src="https://www.mazumamoney.co.uk/app/themes/v1/images/mazuma-logo.svg" alt="Mazuma">
                        </a>
                    </div><!--col-->

                    <div class="col-lg-10 d-none d-md-flex justify-content-end">
                        <nav aria-label="Supplementary navigation" class="aux-navigation">
                                                            <a href="/get-a-quote" class="button __darkpurple mb-0 desktop" style="margin-right: 30px;">Get A Quote</a>

                                                        <a href="https://mazapp.mazumamoney.co.uk/login" class="header-login" target="_blank" rel="noopener">
                                Login
                            </a>
                        </nav>
                    </div>
                </div><!--row-->
            </div>
        </div>

        <div class="header-nav" style="">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!--offcanvas-->
                        <div class="navwrap">
    <button class="burger-close closeNav">
        <span class="burger-toggle"><span></span></span>
        Close Menu
    </button>
    <nav aria-label="Primary" class="nav">
        <ul>
            <li class="menu-item menu-logo">
                <a href="https://www.mazumamoney.co.uk"><img src="https://www.mazumamoney.co.uk/app/themes/v1/images/mazuma-mark.svg" alt="Mazuma"></a>
            </li>
            <li class="menu-item menu-login">
                <a href="https://mazapp.mazumamoney.co.uk/login">Login</a>
            </li>
                            <li class="menu-item
                                ">
                    <a href="https://www.mazumamoney.co.uk/accounting-services/">Accounting services</a>
                                    </li>
                            <li class="menu-item
                                 menu-item-has-children
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ">
                    <a href="https://www.mazumamoney.co.uk/businesses-we-help/">Businesses we help</a>
                                        <ul>
                                                    <li class="menu-item
                                                        ">
                                <a href="https://www.mazumamoney.co.uk/small-business-accounting-services/"><span class="__underline">Small businesses</span></a>
                                                            </li>
                                                    <li class="menu-item
                                                        ">
                                <a href="https://www.mazumamoney.co.uk/sole-trader-accounting-services/"><span class="__underline">Sole Traders</span></a>
                                                            </li>
                                                    <li class="menu-item
                                                        ">
                                <a href="https://www.mazumamoney.co.uk/limited-companies-accounting-services/"><span class="__underline">Limited Companies</span></a>
                                                            </li>
                                                    <li class="menu-item
                                                        ">
                                <a href="https://www.mazumamoney.co.uk/freelancer-accounting-services/"><span class="__underline">Freelancers</span></a>
                                                            </li>
                                                    <li class="menu-item
                                                        ">
                                <a href="https://www.mazumamoney.co.uk/limited-liability-partnership/"><span class="__underline">Limited Liability Partnership</span></a>
                                                            </li>
                                                    <li class="menu-item
                                                        ">
                                <a href="https://www.mazumamoney.co.uk/start-ups-accounting-services/"><span class="__underline">Start-Ups</span></a>
                                                            </li>
                                                    <li class="menu-item
                                                        ">
                                <a href="https://www.mazumamoney.co.uk/lifestyle-business-accounting-services/"><span class="__underline">Lifestyle businesses</span></a>
                                                            </li>
                                                    <li class="menu-item
                                                        ">
                                <a href="https://www.mazumamoney.co.uk/micro-business-accounting-services/"><span class="__underline">Micro Businesses</span></a>
                                                            </li>
                                                    <li class="menu-item
                                                        ">
                                <a href="https://www.mazumamoney.co.uk/accountants-for-landlords/"><span class="__underline">Landlords</span></a>
                                                            </li>
                                                    <li class="menu-item
                                                        ">
                                <a href="https://www.mazumamoney.co.uk/business-set-up/"><span class="__underline">Business Set Up</span></a>
                                                            </li>
                                                    <li class="menu-item
                                                        ">
                                <a href="https://www.mazumamoney.co.uk/accountants-near-me/"><span class="__underline">Find an Accountant Near Me</span></a>
                                                            </li>
                                                    <li class="menu-item
                                                        ">
                                <a href="https://www.mazumamoney.co.uk/cheap-accountant/"><span class="__underline">Cheap Accountants</span></a>
                                                            </li>
                                            </ul>
                                    </li>
                            <li class="menu-item
                                 menu-item-has-children
                                                                                                                                                                                                                                                            ">
                    <a href="https://www.mazumamoney.co.uk/small-business-resources/">Resources</a>
                                        <ul>
                                                    <li class="menu-item
                                                        ">
                                <a href="https://www.mazumamoney.co.uk/free-bookkeeping-software/"><span class="__underline">Free Bookkeeping Software</span></a>
                                                            </li>
                                                    <li class="menu-item
                                                        ">
                                <a href="https://www.mazumamoney.co.uk/news/"><span class="__underline">Resource Hub</span></a>
                                                            </li>
                                                    <li class="menu-item
                                                        ">
                                <a href="https://www.mazumamoney.co.uk/faqs/"><span class="__underline">FAQs</span></a>
                                                            </li>
                                            </ul>
                                    </li>
                            <li class="menu-item
                                 menu-item-has-children
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ">
                    <a href="https://www.mazumamoney.co.uk/making-tax-digital/">Making Tax Digital</a>
                                        <ul>
                                                    <li class="menu-item
                                                        ">
                                <a href="https://www.mazumamoney.co.uk/what-is-making-tax-digital/"><span class="__underline">What is Making Tax Digital?</span></a>
                                                            </li>
                                                    <li class="menu-item
                                                        ">
                                <a href="https://www.mazumamoney.co.uk/getting-ready-for-making-tax-digital/"><span class="__underline">Getting ready for MTD</span></a>
                                                            </li>
                                                    <li class="menu-item
                                                        ">
                                <a href="https://www.mazumamoney.co.uk/making-tax-digital-vat/"><span class="__underline">Making Tax Digital VAT</span></a>
                                                            </li>
                                                    <li class="menu-item
                                                        ">
                                <a href="https://www.mazumamoney.co.uk/digital-record-keeping/"><span class="__underline">Digital Record Keeping</span></a>
                                                            </li>
                                                    <li class="menu-item
                                                        ">
                                <a href="https://www.mazumamoney.co.uk/mtd-for-income-tax-self-assessment-itsa/"><span class="__underline">MTD for Income Tax</span></a>
                                                            </li>
                                                    <li class="menu-item
                                                        ">
                                <a href="https://www.mazumamoney.co.uk/making-tax-digital-penalties/"><span class="__underline">Making Tax Digital Penalties</span></a>
                                                            </li>
                                                    <li class="menu-item
                                                        ">
                                <a href="https://www.mazumamoney.co.uk/pros-and-cons-of-mtd/"><span class="__underline">Pros and Cons of MTD</span></a>
                                                            </li>
                                                    <li class="menu-item
                                                        ">
                                <a href="https://www.mazumamoney.co.uk/making-tax-digital-our-verdict/"><span class="__underline">Making Tax Digital. Our Verdict</span></a>
                                                            </li>
                                            </ul>
                                    </li>
                                        <li class="menu-item __careers">
                    <a href="https://www.mazumamoney.co.uk/careers">Careers</a>
                </li>
                        <li class="menu-item menu-item-flair">
                <a href="https://www.mazumamoney.co.uk/get-a-quote/">Get a Quote
                    <span class="svg-flair">
                        <svg xmlns="http://www.w3.org/2000/svg" width="93" height="8" viewBox="0 0 93 8"><path d="M80.712 2.355c3.067.131 6.05 1.08 9.144.911 1.235-.066 2.255.62 2.665 1.96.21.727.192 1.38-.386 1.91-.538.498-1.163.7-1.912.477-1.312-.394-2.621-.957-3.964-1.099a546.835 546.835 0 00-15.671-1.406c-3.351-.256-6.71-.383-10.077-.508-4.044-.152-8.1-.275-12.154-.346-5.632-.099-11.264-.185-16.9-.18-2.57.002-5.15.156-7.704.385-4.822.428-9.633.994-14.449 1.433-1.866.169-3.75.124-5.625.216-1.652.08-2.505-.89-3.163-2.22C.132 3.124.35 2.57.893 2.037c.532-.52 1.168-.73 1.895-.618 2.973.456 5.94.172 8.88-.18C15.12.829 18.567.885 22.026.839 27.562.764 33.098.64 38.636.63c2.969-.006 5.93.188 8.895.286 3.06.1 6.124.177 9.183.293 3.851.146 7.709.302 11.555.486 4.153.202 8.3.439 12.443.66" fill="#10D7B1" fill-rule="evenodd"></path></svg>
                    </span>
                </a>
            </li>
        </ul>
    </nav><!--nav-->
</div>
                        <!--offcanvas-->
                    </div>
                </div>
            </div><!--container-->
        </div>
    </header><!--header-->

    <main id="Main" class="">


    <?php the_content(); ?> 
    



            <section class="flexibleblocks-block ctafooter __nospacing">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-5 offset-lg-1">
                        <div class="ctafooter-title">
                            <h2 class="section-title __small __white">Want to switch to <span class="svg-flair">hassle free accounting?</span></h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 offset-lg-1">
                        <div class="ctafooter-link-wrap">
                            <a href="https://www.mazumamoney.co.uk/get-a-quote/" class="ctafooter-link">
                                <span class="ctafooter-link-title">
                                    Get a Quote
                                </span>
                                <span class="ctafooter-link-subtitle">
                                    ...only takes 2 minutes
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ctafooter-cursor"></div>
        </section>
    </main><!--#Main-->
</div><!--wrapper-->
<footer>
    <div class="footer d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-0 mb-md-4 mb-lg-0">
                    <div class="row">
                                            <div class="col-md">
                            <div class="footer-list">
                                <h2 class="footer-list-header">Accounting services</h2>
                                <ul>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/accounting-services/">
                                            <span class="__underline">Accounting services</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/invoicing-software/">
                                            <span class="__underline">Invoicing software</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/monthly-management-accounts/">
                                            <span class="__underline">Monthly Management Accounts</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/bookkeeping-services/">
                                            <span class="__underline">Bookkeeping Services</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/bookkeeping-services-for-small-business/">
                                            <span class="__underline">Bookkeeping Services for Small Business</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/vat-return-services/">
                                            <span class="__underline">VAT Return Services</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/year-end-accounts/">
                                            <span class="__underline">Year End Accounts</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/corporation-tax-return/">
                                            <span class="__underline">Company Tax Return</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/outsourced-payroll-service/">
                                            <span class="__underline">Payroll Services</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/self-assessment-tax-return-services/">
                                            <span class="__underline">Self-Assessment Tax Return</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/switching-accountants/">
                                            <span class="__underline">Switching Accountants</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/limited-company-accounts/">
                                            <span class="__underline">Limited Company Accounts</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/limited-company-dormant-accounts/">
                                            <span class="__underline">Limited Company Dormant Accounts</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/hmrc-tax-return-service/">
                                            <span class="__underline">HMRC Tax Return Service</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/capital-gains-tax-return/">
                                            <span class="__underline">Capital Gains Tax Return</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/sole-trader-accounts-and-tax-return/">
                                            <span class="__underline">Sole Trader Accounts and Tax Return</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/accountants-near-me/">
                                            <span class="__underline">Accountants Near Me</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/the-shoebox-service/">
                                            <span class="__underline">The Shoebox Service</span>
                                        </a>
                                    </li>
                                
                                </ul>
                            </div>
                        </div>
                                            <div class="col-md">
                            <div class="footer-list">
                                <h2 class="footer-list-header">Businesses we help</h2>
                                <ul>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/businesses-we-help/">
                                            <span class="__underline">Businesses we help</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/small-business-accounting-services/">
                                            <span class="__underline">Small business</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/sole-trader-accounting-services/">
                                            <span class="__underline">Sole Trader Accounting Services</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/limited-companies-accounting-services/">
                                            <span class="__underline">Limited Companies</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/freelancer-accounting-services/">
                                            <span class="__underline">Freelancer Accounting Services</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/limited-liability-partnership/">
                                            <span class="__underline">Limited Liability Partnership</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/start-ups-accounting-services/">
                                            <span class="__underline">Start-Ups</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/lifestyle-business-accounting-services/">
                                            <span class="__underline">Lifestyle business</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/micro-business-accounting-services/">
                                            <span class="__underline">Micro Business</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/accountants-for-landlords/">
                                            <span class="__underline">Accountants for Landlords</span>
                                        </a>
                                    </li>
                                
                                </ul>
                            </div>
                        </div>
                                            <div class="col-md">
                            <div class="footer-list">
                                <h2 class="footer-list-header">Making Tax Digital</h2>
                                <ul>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/making-tax-digital/">
                                            <span class="__underline">Making Tax Digital</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/what-is-making-tax-digital/">
                                            <span class="__underline">What is Making Tax Digital?</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/getting-ready-for-making-tax-digital/">
                                            <span class="__underline">Getting ready for MTD</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/digital-record-keeping/">
                                            <span class="__underline">Digital Record Keeping</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/making-tax-digital-penalties/">
                                            <span class="__underline">Making Tax Digital Penalties</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/pros-and-cons-of-mtd/">
                                            <span class="__underline">Pros and Cons of MTD</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/mtd-for-income-tax-self-assessment-itsa/">
                                            <span class="__underline">MTD for Income Tax</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/making-tax-digital-vat/">
                                            <span class="__underline">Making Tax Digital VAT</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/making-tax-digital-our-verdict/">
                                            <span class="__underline">Making Tax Digital. Our Verdict</span>
                                        </a>
                                    </li>
                                
                                </ul>
                            </div>
                        </div>
                                            <div class="col-md">
                            <div class="footer-list">
                                <h2 class="footer-list-header">Resources</h2>
                                <ul>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/news/">
                                            <span class="__underline">Resource Hub</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/faqs/">
                                            <span class="__underline">FAQs</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/business-set-up/">
                                            <span class="__underline">Business Set Up</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/tax-centre/">
                                            <span class="__underline">Tax Centre</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/accountant-cost-fees/">
                                            <span class="__underline">Accountants costs and fees</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/how-does-mazuma-work/">
                                            <span class="__underline">How Does Mazuma Work?</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/compare-mazuma-vs-your-accountant/">
                                            <span class="__underline">Mazuma vs Your Accountant</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/compare-mazuma-vs-osome/">
                                            <span class="__underline">Mazuma vs Osome</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/compare-mazuma-vs-ember-accounting/">
                                            <span class="__underline">Mazuma vs Ember Accounting</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/mazuma-vs-the-accountancy-partnership/">
                                            <span class="__underline">Mazuma vs The Accountancy Partnership</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/accountants-near-me/wales/">
                                            <span class="__underline">Accountants Wales</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/accountants-near-me/wales/cardiff/">
                                            <span class="__underline">Accountants Cardiff</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/accountants-near-me/wales/swansea/">
                                            <span class="__underline">Accountants Swansea</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/accountants-near-me/wales/bridgend/">
                                            <span class="__underline">Accountants Bridgend</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/accountants-near-me/wales/newport/">
                                            <span class="__underline">Accountants Newport</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/cheap-accountant/">
                                            <span class="__underline">Cheap Accountants</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/free-bookkeeping-software/">
                                            <span class="__underline">Free Bookkeeping Software</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/self-employed-tax/">
                                            <span class="__underline">Self Employed Tax</span>
                                        </a>
                                    </li>
                                
                                </ul>
                            </div>
                        </div>
                                            <div class="col-md">
                            <div class="footer-list">
                                <h2 class="footer-list-header">About</h2>
                                <ul>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/contact/">
                                            <span class="__underline">Contact</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/team/">
                                            <span class="__underline">Your Experts</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/our-story/">
                                            <span class="__underline">Our Story</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/careers/">
                                            <span class="__underline">Careers</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/award-winning-accountants/">
                                            <span class="__underline">Our Awards</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/in-the-press/">
                                            <span class="__underline">In the press</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/press-enquiries/">
                                            <span class="__underline">Press enquiries</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/partnerships/">
                                            <span class="__underline">Partnerships</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/our-processes/">
                                            <span class="__underline">Our Processes</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/our-technology/">
                                            <span class="__underline">MazApp</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/refer-a-friend/">
                                            <span class="__underline">Refer a friend</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/mazuma-for-accountants/">
                                            <span class="__underline">For Accountants</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/privacy-policy/">
                                            <span class="__underline">Privacy Policy</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/copyright/">
                                            <span class="__underline">Copyright</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/modern-slavery-and-human-trafficking-statement/">
                                            <span class="__underline">Modern Slavery and Human Trafficking Statement</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/terms-and-conditions/">
                                            <span class="__underline">Terms and Conditions</span>
                                        </a>
                                    </li>
                                                                    <li class="footer-list-item">
                                        <a href="https://www.mazumamoney.co.uk/terms-and-conditions/terms-and-conditions-for-one-off-services/">
                                            <span class="__underline">Terms and Conditions for One off Services</span>
                                        </a>
                                    </li>
                                
                                </ul>
                            </div>
                        </div>
                                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer __lower">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <address class="footer-info">
                        <a class="footer-info-item" href="tel:02922940383"><span class="__underline">02922 940 383</span></a>
                        <a class="footer-info-item" href="mailto:sales@mazumamoney.co.uk"><span class="__underline">sales@mazumamoney.co.uk</span></a>
                    </address>

                    <div class="footer-social">
                        <div class="socialwrap">
        <a href="https://en-gb.facebook.com/MazumaAccountants/" class="socialicon __facebook" target="_blank" rel="noopener">
        <span class="sronly">Facebook</span>
    </a>
            <a href="https://twitter.com/mazumagb?lang=en" class="socialicon __twitter" target="_blank" rel="noopener">
        <span class="sronly">Twitter</span>
    </a>
            <a href="https://www.instagram.com/mazumaaccountants/" class="socialicon __instagram" target="_blank" rel="noopener">
        <span class="sronly">Instagram</span>
    </a>
            <a href="https://www.linkedin.com/company/mazuma-gb-ltd" class="socialicon __linkedin" target="_blank" rel="noopener">
        <span class="sronly">LinkedIn</span>
    </a>
    </div>                    </div>
                </div>
                <div class="col-lg-8">
                    <ul class="footer-list-inline">
                                            </ul>
                    <div class="footer-smallprint">
                        <p>© Mazuma GB Limited 2021 | Company Registration Number: 6662632 | VAT No: 938 6581 74</p>
<p>Registered Address: Dragon House, Princes Way, Bridgend Industrial Estate, Bridgend, CF31 3AQ</p>

                    </div>
                                    </div>
            </div>
        </div>
    </div>
</footer>
<?php get_footer(); ?>

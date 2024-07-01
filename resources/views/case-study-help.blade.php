@extends('layouts.web')
@section('title', ' The Remarkable Quality Case Study Help Service in Ireland')
@section('description', ' Let the success come your way to fruition by pursuing the top-notch case study help services by Assignments Help Ireland. Get help to enhance your grades to A+.')
@section('canonical', config('app.url') . Request::path())
@section('content')
<section class="home-banner text-center text-lg-start">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4">
        <h1 style="font-size: 1.6rem; font-weight: bold;"
         class="text-uppercase font-weight-bold text-light mb-2">Distinctive 
         -<span style="color: #192D48;">Acquire the Results of Your Dreams by Ordering Top Case Study Help </span></h1>
        <p class="text-dark font-weight-bold mb-2 font-weight-normal">Want to get hold of your excellent grades in your academic record? If yes, then choosing Assignments Help Ireland can be the most reliable option for you. Our platform has been working for more than 10 years and has helped more than 48K students with an overall success rate of 98%. We ensure that our case study writers are professional to provide you with the best case study help.  </p>
        <div class="banner-features d-none d-md-block" bis_skin_checked="1">
        <div class="row" bis_skin_checked="1">
            <div class="col-md-6 p-1" bis_skin_checked="1">
                <div class="feature align-items-center bg-green shadow" bis_skin_checked="1">
                    <div class="img-box img-box-1" bis_skin_checked="1"></div>
                    <div class="feature-text text-white" bis_skin_checked="1">
                        <h5 class="f-title">Rated 4.9/5</h5>
                        <h5 class="mb-0 ">48K Students</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-1" bis_skin_checked="1">
                <div class="feature align-items-center" bis_skin_checked="1">
                    <div class="img-box img-box-2" bis_skin_checked="1"></div>
                    <div class="feature-text" bis_skin_checked="1">
                        <h5 class="f-title">1.2M+</h5>
                        <h5 class="mb-0">Paper Delivered</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-1" bis_skin_checked="1">
                <div class="feature align-items-center" bis_skin_checked="1">
                    <div class="img-box img-box-3" bis_skin_checked="1"></div>
                    <div class="feature-text" bis_skin_checked="1">
                        <h5 class="f-title">5000+</h5>
                        <h5 class="mb-0">Irish Experts</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-1" bis_skin_checked="1">
                <div class="feature align-items-center" bis_skin_checked="1">
                    <div class="img-box img-box-4" bis_skin_checked="1"></div>
                    <div class="feature-text" bis_skin_checked="1">
                        <h5 class="f-title">98.7%</h5>
                        <h5 class="mb-0">Success Rate</h5>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- <div class="row m-t-20">
          <div class="col-6"><img src="images/Rated.png" class="img-fluid lazyloaded"
              alt="TrustPilot Reviews – WriteMyAssignment Ireland"
              title="TrustPilot Reviews – WriteMyAssignment Ireland" loading="lazy"></div>
          <div class="col-6"><img src="images/1M Paper.png" class="img-fluid lazyloaded"
              alt="TrustPilot Reviews – WriteMyAssignment Ireland"
              title="TrustPilot Reviews – WriteMyAssignment Ireland" loading="lazy"></div>
          <div class="col-6"><img src="images/Irish Experts.png" class="img-fluid lazyloaded"
              alt="TrustPilot Reviews – WriteMyAssignment Ireland"
              title="TrustPilot Reviews – WriteMyAssignment Ireland" loading="lazy"></div>
          <div class="col-6"><img src="images/Success rate.png" class="img-fluid lazyloaded"
              alt="TrustPilot Reviews – WriteMyAssignment Ireland"
              title="TrustPilot Reviews – WriteMyAssignment Ireland" loading="lazy"></div>
        </div> -->
      </div>
      <div class="col-lg-4 pt-sm-4 px-4 px-md-0 pt-md-0 d-flex justify-content-center">
        <div id="calculateForm">
          <div class="form1">
            <form action="/order-now" method="POST" accept-charset="utf-8"><input type="hidden" name="_token"
                value="iA2sHdlDq6yqyhRdgY5vu3OxYBbBwOM13YrbsfC2"><input type="hidden" name="_method" value="PATCH"><span
                class="h5 text-center">Calculate Your Price</span>
              <div class="row m-t-20">
                <div class="col"><select class="form-select" aria-label="Select Academic Level" name="academic">
                    <option value="161">A-Level / College</option>
                    <option value="162">Undergraduate</option>
                    <option value="163">Masters</option>
                    <option value="164">PhD</option>
                  </select></div>
              </div>
              <div class="row m-t-20">
                <div class="col"><select class="form-select" aria-label="Select Type of Paper" name="type_of_paper">
                    <option value="4">Admission Essays</option>
                    <option value="5">Admission Services - Editing</option>
                    <option value="6">Analytical Essay</option>
                    <option value="7">Annotated Bibliography</option>
                    <option value="8">Argumentative Essay</option>
                    <option value="9">Article</option>
                    <option value="10">Article Critique</option>
                  </select></div>
              </div>
              <div class="row m-t-20">
                <div class="col"><select class="form-select" aria-label="Select No of Pages" name="pages">
                    <option value="1">1 Page / 250 Words</option>
                    <option value="2">2 Pages / 500 Words</option>
                    <option value="3">3 Pages / 750 Words</option>
                    <option value="4">4 Pages / 1000 Words</option>
                    <option value="5">5 Pages / 1250 Words</option>
                    <option value="6">6 Pages / 1500 Words</option>
                    <option value="7">7 Pages / 1750 Words</option>
                    <option value="8">8 Pages / 2000 Words</option>
                  </select></div>
                <div class="col"><select class="form-select" aria-label="Select Deadline" name="deadline">
                    <option value="150">20 Days / Jun 14</option>
                    <option value="165">15 Days / Jun 09</option>
                    <option value="166">10 Days / Jun 04</option>
                    <option value="167">8 Days / Jun 02</option>
                  </select></div>
              </div>
              <div class="text-center m-t-10"><span class="c-text">The price is &nbsp;<span class="number">€
                    <span>10</span>&nbsp;<sub><del>€ <span>20</span></del></sub></span></span></div>
              <div class="text-sm-start"><button style="background-color: #0b2051; color: white;"
                  class="btn btn-md d-block btn-dual-shade w-100">   Order case study writing help!</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-4 d-none d-lg-block position-relative">
        <div class="box1">
          <div class="row">
            <div class="col-3"><svg xmlns="http://www.w3.org/2000/svg" width="31.957" height="43.823"
                viewBox="0 0 31.957 43.823">
                <g id="Group_1937" data-name="Group 1937" transform="translate(-61.943 -1498.123)">
                  <path id="Path_1472" data-name="Path 1472"
                    d="M65.427,1505.987c.317,0,.635.014.951,0a1.376,1.376,0,0,0,1.332-1.641c-.092-.589-.214-1.173-.3-1.762-.106-.691.149-.892.827-.659.546.188,1.081.407,1.631.583a1.355,1.355,0,0,0,1.884-1.093c.127-.582.2-1.176.32-1.759.137-.649.409-.748.918-.345.467.37.91.772,1.38,1.139a1.383,1.383,0,0,0,2.192-.385c.313-.507.588-1.038.9-1.548s.634-.522.956-.007c.306.49.588.995.88,1.493a1.4,1.4,0,0,0,2.3.4c.417-.344.82-.705,1.239-1.047.565-.461.855-.359.992.347.1.53.178,1.066.281,1.6a1.392,1.392,0,0,0,2.048,1.178c.527-.187,1.049-.387,1.579-.563.583-.193.863.06.755.66s-.236,1.207-.314,1.816a1.333,1.333,0,0,0,1.4,1.6c.6.007,1.194,0,1.79.007.625.011.8.31.5.862-.268.491-.554.971-.828,1.458a1.405,1.405,0,0,0,.768,2.2c.5.195,1.017.365,1.521.556.709.27.766.574.2,1.056-.425.363-.863.713-1.282,1.082a1.4,1.4,0,0,0,.039,2.3c.4.338.8.669,1.2,1.009.608.523.561.814-.175,1.091-.505.19-1.016.365-1.52.557a1.417,1.417,0,0,0-.787,2.168c.271.489.563.967.835,1.455.327.585.167.861-.517.88-.6.017-1.194,0-1.79.02a1.355,1.355,0,0,0-1.374,1.679c.105.605.218,1.209.3,1.818.078.565-.175.772-.709.592-.582-.2-1.154-.424-1.738-.615a1.376,1.376,0,0,0-1.917,1.124c-.11.567-.191,1.139-.3,1.706-.125.64-.462.749-.974.326-.416-.345-.826-.7-1.244-1.041a1.434,1.434,0,0,0-2.343.425c-.288.5-.568,1.007-.873,1.5-.281.452-.611.45-.895-.006-.314-.506-.6-1.03-.9-1.545a1.4,1.4,0,0,0-2.224-.444c-.457.354-.887.74-1.337,1.1-.542.437-.85.312-.977-.389-.1-.568-.2-1.137-.315-1.7a1.353,1.353,0,0,0-1.89-1.074c-.548.181-1.085.4-1.629.591-.651.233-.932,0-.81-.669.1-.532.209-1.061.284-1.6.168-1.194-.363-1.807-1.572-1.829-.5-.01-1.007,0-1.511-.007-.745-.013-.911-.3-.546-.935.279-.484.568-.964.83-1.457a1.382,1.382,0,0,0-.808-2.1c-.56-.2-1.123-.4-1.672-.632-.516-.216-.567-.505-.16-.873.456-.412.937-.8,1.4-1.2a1.389,1.389,0,0,0,.027-2.224c-.445-.4-.914-.767-1.363-1.16-.488-.428-.439-.723.176-.972.517-.21,1.051-.378,1.573-.575a1.4,1.4,0,0,0,.8-2.194c-.27-.489-.563-.966-.837-1.453-.307-.547-.136-.856.479-.873C64.792,1505.98,65.11,1505.987,65.427,1505.987Zm12.468,20.77a12.421,12.421,0,1,0-12.409-12.491A12.44,12.44,0,0,0,77.895,1526.757Z"
                    transform="translate(0)" fill="#192D48"></path>
                  <path id="Path_1473" data-name="Path 1473"
                    d="M82.381,1761.959l-3.928,1.185a1.354,1.354,0,0,1-.426.125,1.054,1.054,0,0,1-.64-.165c-.1-.1-.062-.427.022-.6.765-1.576,1.555-3.14,2.337-4.708q1.359-2.727,2.717-5.454a1.909,1.909,0,0,1,1.688-.845.942.942,0,0,1,.792.83c.122.621.213,1.247.335,1.868a.9.9,0,0,0,1.551.563c.467-.37.912-.769,1.373-1.147a.962.962,0,0,1,1.627.268,7.077,7.077,0,0,1,.57,1.024.9.9,0,0,1,.025.658q-2.71,5.489-5.467,10.954c-.1.2-.373.449-.541.432s-.4-.3-.48-.511c-.448-1.244-.856-2.5-1.282-3.754C82.58,1762.457,82.488,1762.237,82.381,1761.959Z"
                    transform="translate(-13.664 -225.002)" fill="#192d48"></path>
                  <path id="Path_1474" data-name="Path 1474"
                    d="M215.193,1753.449a6.241,6.241,0,0,1,.785.439c.471.365.908.772,1.375,1.142a.9.9,0,0,0,1.568-.592c.109-.6.205-1.21.33-1.81a.963.963,0,0,1,1.319-.788,2.042,2.042,0,0,1,1.4,1.205c1.565,3.109,3.185,6.191,4.767,9.291a2.39,2.39,0,0,1,.106.762,2.345,2.345,0,0,1-.777.071c-1.171-.3-2.339-.62-3.489-.994-.521-.169-.72-.041-.87.463-.389,1.3-.813,2.592-1.26,3.875a2.944,2.944,0,0,1-.527.707c-.2-.194-.472-.352-.6-.587-1.863-3.563-3.7-7.138-5.561-10.7a.652.652,0,0,1,0-.759c.248-.371.423-.794.693-1.145A3.8,3.8,0,0,1,215.193,1753.449Z"
                    transform="translate(-134.722 -225.274)" fill="#192d48"></path>
                  <path id="Path_1475" data-name="Path 1475"
                    d="M101.539,1551.116a11.547,11.547,0,1,1,11.528,11.561A11.563,11.563,0,0,1,101.539,1551.116Zm10.349,1.878c-1.025-.987-1.984-1.924-2.957-2.844a1.55,1.55,0,0,0-2.245-.053,1.525,1.525,0,0,0,.133,2.241q2.026,1.966,4.064,3.921a1.527,1.527,0,0,0,2.526-.217q3.068-4.095,6.127-8.2a1.528,1.528,0,1,0-2.412-1.859c-.513.664-1,1.344-1.506,2.016Z"
                    transform="translate(-35.164 -36.798)" fill="#192d48"></path>
                </g>
              </svg></div>
            <div class="col-9"><span class="grades">A+ Grades</span><span class="t-text">Guranteed</span></div>
          </div>
        </div><img src="images/Service page image.webp" class="img-fluid dem lazyloaded" alt="Write My Assignment IE"
          title="Write My Assignment IE" loading="lazy" width="285" height="330"
          src="https://static.writemyassignment.ie/assets/frontend/images/simple/write-my-assignments.webp">
        <div class="box2">
          <div class="row">
            <div class="col-3"><svg xmlns="http://www.w3.org/2000/svg" width="37.981" height="38"
                viewBox="0 0 37.981 38">
                <g id="Group_1938" data-name="Group 1938" transform="translate(-1581.458 -1645.391)">
                  <path id="Path_1478" data-name="Path 1478"
                    d="M1608.355,1665.174a25.678,25.678,0,0,0-.425-5.868,7.081,7.081,0,0,0-1.625-3.388,3.92,3.92,0,0,0-3.925-1.283c-.843.187-1.705.284-2.556.437-1.361.245-2.622-.3-3.929-.479-3.483-.489-3.918.205-4.868,3.275a30.806,30.806,0,0,0-.746,5.545c-.068.588-.059,1.184-.14,1.781a21.811,21.811,0,0,1-2.006-5.98c-.175-.926-.263-1.871-.349-2.812a2.221,2.221,0,0,1,.932-2.105c.209-.155.393-.345.591-.516a2.807,2.807,0,0,0,.921-3,3.608,3.608,0,0,1,1.108-3.673,5.145,5.145,0,0,1,2.677-1.552,4.9,4.9,0,0,1,1.942.048,4.129,4.129,0,0,0,2.641.027,4.386,4.386,0,0,1,3.35.251,16.341,16.341,0,0,1,5.459,4.008,13.634,13.634,0,0,1,3,3.9,8.61,8.61,0,0,1,.1,6.818C1609.892,1662.17,1609.079,1663.654,1608.355,1665.174Z"
                    transform="translate(-5.553)" fill="#192d48"></path>
                  <path id="Path_1479" data-name="Path 1479"
                    d="M1627.076,1736.345l5.53.658a1.045,1.045,0,0,1,.949.793,22.5,22.5,0,0,1,1.151,9.152,2.777,2.777,0,0,1-.619,1.524,9.435,9.435,0,0,1-7.223,3.329,9.611,9.611,0,0,1-5.734-2.138,3.957,3.957,0,0,1-1.635-3.273,42.607,42.607,0,0,1,1-8.374,1.322,1.322,0,0,1,1.244-1.065C1623.5,1736.74,1625.256,1736.551,1627.076,1736.345Z"
                    transform="translate(-33.44 -79.963)" fill="#192d48"></path>
                  <path id="Path_1480" data-name="Path 1480"
                    d="M1593.673,1883.484c.526-1.023,1.011-1.961,1.492-2.9.567-1.11,1.123-2.226,1.7-3.329.09-.171.284-.4.437-.407a9.306,9.306,0,0,1,4.893.723c.227.121.448.254.663.377-.02.063-.021.089-.034.1-1.974,1.6-2.351,3.939-2.893,6.2-.159.665-.357,1.321-.487,1.991-.085.436-.31.506-.71.506-4.508,0-9.017.016-13.525.027-1.222,0-2.444,0-3.748,0,.129-1.8-.245-3.552.3-5.262a6.71,6.71,0,0,1,5.946-4.656,4.719,4.719,0,0,1,2.313.049c.579.313.859,1.223,1.213,1.9.727,1.389,1.414,2.8,2.122,4.2C1593.432,1883.138,1593.528,1883.26,1593.673,1883.484Z"
                    transform="translate(0 -203.384)" fill="#192d48"></path>
                  <path id="Path_1481" data-name="Path 1481"
                    d="M1754.327,1839.164l4.891,4.936c-.584.561-1.2,1.135-1.792,1.724-1.92,1.892-3.828,3.795-5.759,5.676a2.522,2.522,0,0,1-.951.6q-2.474.78-4.977,1.467a1.125,1.125,0,0,1-.925-.112,1.139,1.139,0,0,1-.1-.928c.455-1.668.951-3.325,1.453-4.979a1.784,1.784,0,0,1,.4-.727q3.737-3.736,7.5-7.447C1754.134,1839.306,1754.217,1839.252,1754.327,1839.164Zm-6.963,9.09c-.221.732-.5,1.567-.722,2.416-.141.53.321,1.109.809.991.908-.218,1.8-.513,2.55-.733-.1-.666-.213-1.237-.248-1.813-.026-.424-.16-.6-.6-.627C1748.59,1848.458,1748.032,1848.346,1747.364,1848.254Z"
                    transform="translate(-143.48 -170.356)" fill="#192d48"></path>
                  <path id="Path_1482" data-name="Path 1482"
                    d="M1847.817,1808.582c.238-.218.5-.5.8-.727a1.454,1.454,0,0,1,1.982.058c.893.839,1.757,1.709,2.6,2.6a1.492,1.492,0,0,1,.064,1.988c-.229.3-.509.56-.758.829Z"
                    transform="translate(-234.17 -142.513)" fill="#192d48"></path>
                  <path id="Path_1483" data-name="Path 1483" d="M1837.691,1829.528l-.826.764-4.873-4.925.8-.764Z"
                    transform="translate(-220.258 -157.554)" fill="#192d48"></path>
                </g>
              </svg></div>
            <div class="col-9"><span class="grades">100+</span><span class="t-text">Writers</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="text-center">
    <h3 class="text-[#EF443B] text-3xl mt-5 font-bold">Honored by the Students of: </h3>
  </div>
  <div class="my-4 mt-4">
    <div class="row align-items-center text-center mx-auto">
      <div class="col-6 col-md-1">
        <img class="img-fluid border-hover rounded-hover d-sm-block d-md-none"
          src="https://www.assignmentshelp.ae/imgs/uni/at1-80x80.png" alt="asg">
      </div>
      <div class="col-6 col-md-1">
        <img class="img-fluid border-hover border-dark rounded-hover"
          src="https://www.assignmentshelp.ae/imgs/uni/at1-80x80.png" alt="asg">
      </div>
      <div class="col-6 col-md-1">
        <img class="img-fluid border-hover border-dark  rounded-hover"
          src="https://www.assignmentshelp.ae/imgs/uni/at2-80x80.png" alt="asg">
      </div>
      <div class="col-6 col-md-1">
        <img class="img-fluid border-hover border-dark  rounded-hover"
          src="https://www.assignmentshelp.ae/imgs/uni/at3-80x80.png" alt="asg">
      </div>
      <div class="col-6 col-md-1">
        <img class="img-fluid border-hover border-dark  rounded-hover"
          src="https://www.assignmentshelp.ae/imgs/uni/at4-80x80.png" alt="asg">
      </div>
      <div class="col-6 col-md-1">
        <img class="img-fluid border-hover border-dark  rounded-hover"
          src="https://www.assignmentshelp.ae/imgs/uni/at5-80x80.png" alt="asg">
      </div>
      <div class="col-6 col-md-1">
        <img class="img-fluid border-hover border-dark  rounded-hover"
          src="https://www.assignmentshelp.ae/imgs/uni/at6-80x80.png" alt="asg">
      </div>
      <div class="col-6 col-md-1">
        <img class="img-fluid border-hover border-dark  rounded-hover"
          src="https://www.assignmentshelp.ae/imgs/uni/at7-80x80.png" alt="asg">
      </div>
      <div class="col-6 col-md-1">
        <img class="img-fluid border-hover border-dark  rounded-hover"
          src="https://www.assignmentshelp.ae/imgs/uni/at8-80x80.png" alt="asg">
      </div>
      <div class="col-6 col-md-1">
        <img class="img-fluid border-hover border-dark  rounded-hover"
          src="https://www.assignmentshelp.ae/imgs/uni/at9-80x80.png" alt="asg">
      </div>
      <div class="col-6 col-md-1">
        <img class="d-none d-md-block img-fluid border-hover rounded-hover"
          src="https://www.assignmentshelp.ae/imgs/uni/at10-80x80.png" alt="asg">
      </div>
      <div class="col-6 col-md-1">
      </div>
    </div>
  </div>

</section>

<!--====================== Start Content Section ======================-->
<section>
  <div style="background: #DBECFE;" class="container-fluid py-5 px-5">
    <div class="content-wrapper text-center">
      <h2 style="color: #182E47;" class="fs-2 mb-4 font-weight-bold">Let the Quality Work Pay Off - The Top-Class Case Study Assignment Help </h2>
      <p style="color: #182E47;" class="mb-4 font-weight-bold">If you are looking for quality work for your case study, our doors are open for you. Assignments Help Ireland always provides top-class quality work that meets all the criteria of students. This is because we have a team of experienced and professional writers. They are highly trained in writing engaging work by providing the perfect case study assignment help services. </p>
      <p style="color: #182E47;" class="mb-4">Our end goal is to satisfy our clients with our work so our writers are responsible for working professionally. Also, our writers make sure that the work they are providing is abiding by the case study rules. So, whether you are a college or a university student, you will definitely meet your goals and achieve outstanding grades by following our case study writing guidance. </p>

      <p style="color: #182E47;">Our writers also specialize in researching, proofreading, formatting, and editing. Assignments Help Ireland has provided services to thousands of students and helped them achieve their desired grades. Therefore, once you order our services, we guarantee the best results with outstanding grades.</p>
    </div><!--.content-wrapper-->
  </div>
</section>
<!--====================== End Content Section ======================-->

<section class="section50 py-5" id="how-ireland-works">
  <div class="container">
    <div class="heading">
      <h2 class="heading-title text-center mb-5"> Assignments Help Ireland Procedure </h2>
    </div>
    <div class="row pb-3">
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="box bg-white border shadow">
          <li class="icon"> <i aria-hidden="true" class="fa fa-file-text-o"></i></li>
          <h3 class="works-title text-green">Order Submission</h3>
          <p class="works-content">To submit your order, fill out our order form with your complete assignment details. After reviewing your assignment, we will offer you a custom price quote. </p>
        </div>
      </div>
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="box middle box bg-white border shadow ">
          <li class="icon"> <i class="fa fa-credit-card" aria-hidden="true"></i></li>
          <h3 class="works-title text-green">Payment Method</h3>
          <p class="works-content">We offer payment methods via Visa and debit card before assigning the best subject professional for your project. They will start writing your assignment and deliver it to you before the deadline. </p>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="box box bg-white border shadow">
          <li class="icon"> <i aria-hidden="true" class="fa fa-envelope-o"></i></li>
          <h3 class="works-title text-green">Assignment Delivery</h3>
          <p class="works-content">We will email you a complete assignment using your email ID. If you think there’s still something to be changed or edited, we can do it freely since we offer unlimited revisions. </p>
        </div>
      </div>
    </div>
    <span class="d-flex justify-content-center"> <a href="#" class="btn-new">Buy case study writing services!</a>
  </div>

  </span>
</section>

<!-- 14th section custom essay writing -->
<section class="overflow-hidden my-4 py-4">
  <div class=" container px-3">
    <div class="row mb-5 align-items-center">
      <div class="col-lg-6 p-4">
        <h2 class="text-2xl mb-6 font-medium">
          Let your Career Shine - The Excellent Case Study Help Services
        </h2>
        <p>
          Make your career outstanding by taking a step towards Assignments Help Ireland. This excellent platform is ready for you to cope with your thesis writing and the difficulties you are facing. 
        </p>
        <br>
        <p>
          Furthermore, our professional writers possess great expertise and knowledge in many fields and case study subjects that will meet your demands. Our team of professional case study makers ensures that they provide you with top-quality work that will let your grades transcend the limits. 
        </p>
        <p>
          So, our platform offers reliable and trustworthy services, including fast delivery, deep subject analysis, proofreading, and writing attention-grabbing content. Our platform truly abides by the Irish university rules and policies. We are certain that we will provide you with first-rate material, free from copyright issues. 
        </p>
        <!-- Order Now Button -->
        <div class="mx-auto text-center text-lg-start mt-12 mt-lg-5">
          <a href="#">
            <button style="border-radius: 30px 0px 30px 0px; background-color: #192D48; color: white;"
              class="px-4 btn py-3">
              Get case study help today!
            </button>
          </a>
        </div>
      </div>
      <div class="text-center col-lg-6 p-3">
        <img src="images/01.jpg" width="100%" alt="asg" class="img-fluid">
      </div>
    </div>
    <div class="row align-items-center">
      <div class="text-center col-lg-6 p-3 order-2 order-md-1">
        <img src="images/02.jpg" width="100%" alt="asg" class="img-fluid">
      </div>
      <div class="col-lg-6 p-4 order-1 order-md-2">
        <h2 class="text-2xl mt-4 my-4 font-medium">
          Our Presence Beyond the Horizon - Online Case Study Help
        </h2>
        <p>
          The most reliable and easiest way to seek case study help for students is online. This helps the students work from a distance without any difficulties. Assignments Help Ireland is one of the platforms that is present beyond the horizon to help students complete their case studies. This unique service that we provide is flexible and easy. 
        </p>
        <br>
        <p>
          Furthermore, you can easily provide us with the case study details and submit them to us online without any need to come onsite. Our writers will work on your case study and will deliver it to you via email to your email ID. If you need any changes in your assignment you can ask for additional revisions since we provide unlimited revisions. Our team is available to assist you 24/7 for any queries and guidance. 
        </p>
        <!-- Order Now Button -->
        <div class="mx-auto text-center text-lg-start mt-12 mt-lg-5">
          <a href="#">
            <button style="border-radius: 30px 0px 30px 0px; background-color: #192D48; color: white;"
              class="px-4 btn py-3">
              Get case study help today!
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="container-lg incentives benefits" id="benefits">
  <div class="container-lg img-boxes">
    <div class="row">
      <div class="col-md-12">
        <h3 class="text-center">
          Why Choose Case Study Help Services?
        </h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 exlore_benefits type_benefits">
        <div class="quality-boxes">
          <div class="row">
            <div class="col-md-6 mb-3">
              <div class="wrapperz">
                <div class="box">
                  <img src="images/__Low price.png" alt="Quality img">
                </div>
                <div class="wrapper-box-content">
                  <h4 class="qualtiy-box-title">Low-priced assignment solutions</h4>
                  <p class="wrapper-text">
                    Assignments Help Ireland is keen to provide students with affordable case study help services regardless of their financial background. We ensure that the services we are offering meet every student’s budget.


                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class=" wrapperz">
                <div class="box">
                  <img src="images/__Experienced Writers.png" alt="writer img">
                </div>
                <div class="wrapper-box-content">
                  <h4 class="qualtiy-box-title">Timely delivery</h4>
                  <p class="wrapper-text">
                    We embrace timely delivery, so we ensure that our clients receive their work from us before the deadline.


                  </p>
                </div>

              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="wrapperz">
                <div class="box">
                  <img src="images/__Timely Delivery.png" alt="deadline img">
                </div>
                <div class="wrapper-box-content">
                  <h4 class="qualtiy-box-title">24/7 Dedicated customer support </h4>
                  <p class="wrapper-text">
                    We offer 24/7 support to all students so that if they need any help or have any queries they can ask us freely. 
                  </p>
                </div>

              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="wrapperz">
                <div class="box">
                  <img src="images/100-Plag free.png" alt="source img">
                </div>
                <div class="wrapper-box-content">
                  <h4 class="qualtiy-box-title">Assistance from experienced writers </h4>
                  <p class="wrapper-text">
                    We have a team of excellent writers who are qualified with the highest degree levels so we can ensure that we will provide you with the best quality case study work to reach your specific demands. 

                  </p>
                </div>

              </div>
            </div>
            <div class="col-md-6">
              <div class="wrapperz">
                <div class="box">
                  <img src="images/__24-7 customer support.png" alt="support img">
                </div>
                <div class="wrapper-box-content">
                  <h4 class="qualtiy-box-title">100% Plagiarism free assignment</h4>
                  <p class="wrapper-text">
                    Our professional case study writers ensure that they provide original content free from plagiarism. They always proofread the assignments and check them through reliable tools such as Turnitin before delivering to ensure that the work done is 100% unique. 
                  </p>
                </div>

              </div>
            </div>
            <div class="col-md-6">
              <div class="wrapperz">
                <div class="box">
                  <img src="images/__Free samples.png" alt="hidden img">
                </div>
                <div class="wrapper-box-content">
                  <h4 class="qualtiy-box-title">Free assignment samples</h4>
                  <p class="wrapper-text">
                    We truly value students’ satisfaction so we provide our work samples to let them get an idea of our work that they will receive. </p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class=" py-5 free-feature">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h4>Free Gifts with Every Order</h4>
        <p class="wrapper-text">
        Get complete delivery of your order, including our free features.
                  </p>
        <hr class="hr-line w-25 mx-auto">
      </div>
    </div>
    <div class="container row g-0 g-md-3 m-t-20">
      <div class="col-md-2">
        <div class="feature-box"><span class="grey-text"> Plagiarism Report </span><span class="h5 mb-0"><del>€
              15.99</del></span><span class="h6"> FREE </span></div>
      </div>
      <div class="col-md-2">
        <div class="feature-box"><span class="grey-text"> Preferred Style Referencing </span><span
            class="h5 mb-0"><del>€ 11.99</del></span><span class="h6"> FREE </span></div>
      </div>
      <div class="col-md-2">
        <div class="feature-box"><span class="grey-text"> On-Point Formatting </span><span class="h5 mb-0"><del>€
              17.99</del></span><span class="h6"> FREE </span></div>
      </div>
      <div class="col-md-2">
        <div class="feature-box"><span class="grey-text"> Subject Matter Experts </span><span class="h5 mb-0"><del>€
              20.99</del></span><span class="h6"> FREE </span></div>
      </div>
      <div class="col-md-2">
        <div class="feature-box"><span class="grey-text"> Free Edits &amp; Revisions </span><span class="h5 mb-0"><del>€
              16.99</del></span><span class="h6"> FREE </span></div>
      </div>
      <div class="col-md-2">
        <div class="feature-box"><span class="grey-text"> Title &amp; Cover Page </span><span class="h5 mb-0"><del>€
              28.99</del></span><span class="h6"> FREE </span></div>
      </div>
    </div>
    <div>
      <p><b>Buy assignments online</b> from Write My Assignment and enjoy all these perks for free! <span
          class="red"><del>65,86</del> FREE </span></p>
    </div>
  </div>
</section>

<section>
  <div class="position-relative px-0 pb-5">
    <div style="padding-left: 2rem; padding-right: 2rem;" class="container mx-auto">
      <h3 style="color: #5A5959;" class="text-center mt-5">Meet Our
        <span class="text-[#EF443B]">  Best Assignment Writers Online 
        </span>
      </h3>

      <div class="lg:p-16 pt-4 pb-8">

        <div class="slideshow-container">
          <div style="display: block;" class="mySlides">
            <div class="professional-box">
              <div class="row align-items-center g-0">
                <div class="col-lg-3"><img class="img-fluid lazyload mx-auto d-block"
                    src="https://www.assignmentshelp.ae/imgs/images-new/person-one.svg" alt="Joshua" title="Joshua"
                    loading="lazy" width="250" height="180">
                </div>
                <div class="col-lg-9">


                  <div class="team-box">
                    <div class="row">
                      <div class="col-md-6"><h4 class="h5 mb-0">Mark Lee</h4>
                        <div class="d-flex">
                          <div class="e-text">
                            4.9 Rating
                          </div>
                          <ul style="list-style: none; padding-left: 0rem;"
                            class="d-flex justify-content-center align-content-center">
                            <li>
                              <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="star" class="w-4 text-[#FFCD05]" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                              </svg>
                            </li>
                            <li>
                              <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="star" class="w-4 text-[#FFCD05]" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                              </svg>
                            </li>
                            <li>
                              <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="star" class="w-4 text-[#FFCD05]" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                              </svg>
                            </li>
                            <li>
                              <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="star" class="w-4 text-[#FFCD05]" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                              </svg>
                            </li>
                            <li>
                              <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="star" class="w-4 text-[#FFCD05]" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                              </svg>
                            </li>
                          </ul>

                        </div>
                        <div class="row g-0">
                          <div class="col-md-6"><h5 style="font-weight: 600;" class="">PhD Degree</h5>
                          </div>
                          <div class="col-md-6"><h5 style="font-weight: 600;"> 18,752<h5
                                style="font-weight: normal">Orders
                                </span></span></div>
                        </div>
                        <div class="row mt-3 g-0">
                          <div class="col-md-6"><h5 style="font-weight: 600;"> 14,925 <h5
                                style="font-weight: normal;"> Reviews
                                </span></span></div>
                          <div class="col-md-6"><span style="font-weight: 600;"> 98% <span
                                style="font-weight: normal;">Success Rate</span></span>
                          </div>
                        </div>

                        <ul style="padding-left: 0rem;" class="topics-covered m-t-30">
                          <li class="list-inline-item">Reflective Writing</li>
                          <li class="list-inline-item">Content Expert</li>
                          <li class="list-inline-item">Blog Writer</li>
                        </ul>
                      </div>
                      <div class="col-md-6">
                        <div class="px-3 py-3 paragraph-box">
                          <p>"Mark Lee has offered professional services for over five years with a 5-star rating and a 98% success rate and has completed 8000 orders in Assignment Help Ireland. He is qualified with a PhD and specializes in many different modes of writing, including case studies, reports, essays, and more. His written documents always help students achieve better grades across Ireland. "</p>
                        </div>
                        <div class="mt-4 text-end"><a href="https://www.writemyassignment.ie/user/order"
                            style="background-color: #192E49; border-radius: 20px;" class="btn text-white"> Write My
                            Paper </a>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>
          <div style="display: block;" class="mySlides">
            <div class="professional-box">
              <div class="row align-items-center g-0">
                <div class="col-lg-3"><img class="img-fluid lazyload mx-auto d-block"
                    src="https://www.assignmentshelp.ae/imgs/images-new/person-three.svg" alt="Joshua" title="Joshua"
                    loading="lazy" width="250" height="180">
                </div>
                <div class="col-lg-9">


                  <div class="team-box">
                    <div class="row">
                      <div class="col-md-6"><h4 class="h5 mb-0">Jack Martin</h4>
                        <div class="d-flex">
                          <div class="e-text">
                            4.9 Rating
                          </div>
                          <ul style="list-style: none; padding-left: 0rem;"
                            class="d-flex justify-content-center align-content-center">
                            <li>
                              <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="star" class="w-4 text-[#FFCD05]" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                              </svg>
                            </li>
                            <li>
                              <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="star" class="w-4 text-[#FFCD05]" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                              </svg>
                            </li>
                            <li>
                              <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="star" class="w-4 text-[#FFCD05]" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                              </svg>
                            </li>
                            <li>
                              <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="star" class="w-4 text-[#FFCD05]" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                              </svg>
                            </li>
                            <li>
                              <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="star" class="w-4 text-[#FFCD05]" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                              </svg>
                            </li>
                          </ul>

                        </div>
                        <div class="row g-0">
                          <div class="col-md-6"><h5 style="font-weight: 600;" class="">Master’s Degree</h5>
                          </div>
                          <div class="col-md-6"><h5 style="font-weight: 600;"> 8,215 Orders  <span
                                style="font-weight: normal">Orders
                                 </span></h5></div>
                        </div>
                        <div class="row mt-3 g-0">
                          <div class="col-md-6"><h5 style="font-weight: 600;">6,958 <span
                                style="font-weight: normal;"> Reviews
                                </span></h5></div>
                          <div class="col-md-6"><h5 style="font-weight: 600;"> 99% <span
                                style="font-weight: normal;"> Success Rate</span></h5>
                          </div>
                        </div>

                        <ul style="padding-left: 0rem;" class="topics-covered m-t-30">
                          <li class="list-inline-item">Reflective Writing</li>
                          <li class="list-inline-item">Content Expert</li>
                          <li class="list-inline-item">Blog Writer</li>
                        </ul>
                      </div>
                      <div class="col-md-6">
                        <div class="px-3 py-3 paragraph-box">
                          <p>"Jack Martin, with 10 years of experience in Assignments Help Ireland, completed more than 8000 orders with a 4.9/5 rating and received 7,000 reviews. He helped thousands of students across Ireland with his professional writing services. He is qualified with a master's in English and outstanding grades. The studying company appreciated him for his quality services, as his success rate is 99%."</p>
                        </div>
                        <div class="mt-4 text-end"><a href="https://www.writemyassignment.ie/user/order"
                            style="background-color: #192E49; border-radius: 20px;" class="btn text-white"> Write My
                            Paper </a>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>
          <div style="display: block;" class="mySlides">
            <div class="professional-box">
              <div class="row align-items-center g-0">
                <div class="col-lg-3"><img class="img-fluid lazyload mx-auto d-block"
                    src="https://www.assignmentshelp.ae/imgs/images-new/person-two.svg" alt="Joshua" title="Joshua"
                    loading="lazy" width="250" height="180">
                </div>
                <div class="col-lg-9">


                  <div class="team-box">
                    <div class="row">
                      <div class="col-md-6"><span class="h5 mb-0">Joshua</span>
                        <div class="d-flex">
                          <div class="e-text">
                            4.9 Rating
                          </div>
                          <ul style="list-style: none; padding-left: 0rem;"
                            class="d-flex justify-content-center align-content-center">
                            <li>
                              <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="star" class="w-4 text-[#FFCD05]" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                              </svg>
                            </li>
                            <li>
                              <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="star" class="w-4 text-[#FFCD05]" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                              </svg>
                            </li>
                            <li>
                              <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="star" class="w-4 text-[#FFCD05]" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                              </svg>
                            </li>
                            <li>
                              <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="star" class="w-4 text-[#FFCD05]" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                              </svg>
                            </li>
                            <li>
                              <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="star" class="w-4 text-[#FFCD05]" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                  d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                              </svg>
                            </li>
                          </ul>

                        </div>
                        <div class="row g-0">
                          <div class="col-md-6"><span style="font-weight: 600;" class="">PhD</span>
                          </div>
                          <div class="col-md-6"><span style="font-weight: 600;"> 2855 <span
                                style="font-weight: normal">Assignments
                                Written</span></span></div>
                        </div>
                        <div class="row mt-3 g-0">
                          <div class="col-md-6"><span style="font-weight: 600;"> 96% <span
                                style="font-weight: normal;">Client
                                Retention</span></span></div>
                          <div class="col-md-6"><span style="font-weight: 600;"> 300+ <span
                                style="font-weight: normal;">Reviews</span></span>
                          </div>
                        </div>

                        <ul style="padding-left: 0rem;" class="topics-covered m-t-30">
                          <li class="list-inline-item">Reflective Writing</li>
                          <li class="list-inline-item">Content Expert</li>
                          <li class="list-inline-item">Blog Writer</li>
                        </ul>
                      </div>
                      <div class="col-md-6">
                        <div class="px-3 py-3 paragraph-box">
                          <p>"Hello students. Meet Joshua, the most consistent
                            performer of our team. If you are wondering who
                            can write my assignment in Dublin, this is the
                            guy that you can surely trust. He will not let
                            you down and will pick up your grades with an
                            exceptional assignment."</p>
                        </div>
                        <div class="mt-4 text-end"><a href="https://www.writemyassignment.ie/user/order"
                            style="background-color: #192E49; border-radius: 20px;" class="btn text-white"> Write My
                            Paper </a>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>
        <div style="text-align:center" class="pt-4">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>
      </div>
    </div>
  </div>
</section>

<section style="background-color: #DBECFE; padding: 80px 0px 80px 0px;" class="content bg-content">
  <div class="container">
    <div style="padding-left: 1rem;" class="row">
      <div class="row m-t-20">
        <div class="col-md-6">
          <h2 class="h6 fw-bold fs-4">Make the Remarkable Growth In Your Grades by Choosing Our Case Study Services </h2>
          <p style="color: black;" class="pt-4">Stand out at the top level of your grades by choosing the well-known case study help services from Assignments Help Ireland. We have hired expert case study writers to guide you with your case study in the perfect way and complete it professionally. Our writers ensure that they will provide you with the best case study help to help you make remarkable growth in your grades. </p>
          <p style="color: black;" class="py-3" >Our writers are experts in case study assignments, so they know how to do them proficiently. Moreover, our expert team of writers will provide you with case study help using professional strategies. These include eye-catching headings, explaining objects and purposes, adding relevant quotes, and much more. Using these smart tactics will help you reach your grades at the top of the result paper. </p>
        </div>
        <div class="col-md-6">
          <h2 class="h6 fw-bold fs-4">Making the Quality Work Flawless - Professional Case Study Homework Help</h2>
          <p style="color: black;" class="pt-4">Assignments Help Ireland is fully committed to providing quality work without any flaws. Our expert case studies writers ensure that they provide the best quality work to bring out outstanding grades in your academic results. They are highly qualified in case studies and write content relevant to the topic. </p>
          <p style="color: black;" class="py-3">Additionally, many students from different Irish universities highly admire their expert-quality work. Their case study work is proven to bring better academic results. Many students used their services and stood at the top positions. Therefore, our quality work is highly recommended across Ireland in many different cities, including Dublin, Waterford, Cork, etc. </p>
          <p style="color: black;" class="py-3">If you also want quality work to overflow into success in your career, you must choose our services and get quality case study assignment help. Don’t waste your time completing poor-quality assignments; get in touch with our professionals today. </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h2 class="h6 fw-bold fs-4">Make a Significant Move to Thrill Your Teacher with Our Top-notch Services </h2>
          <p style="color: black;" class="pt-4">Are you looking to add something more to your case study assignment? For that, we are here to make your case study a genuine piece. Regardless of your academic level, our team of writers makes your case study unique and will thrill your teacher. They provide the best case study writing help for Irish students. Our writers are highly skilled in crafting a solid piece of content. </p>
          <p style="color: black;" class="py-3">Whether you need to complete a case study on political subjects, medicine, physics, computer, media, or any other subject. In addition, our writers have excellent English language skills that make your case study coursework reliable and engaging. These qualified writers are highly trained and regularly hone their skills for potential writing quality. </p>
          <p style="color: black;" class="py-3">Many students say that their teachers are greatly inspired by the case study assignments that our writers crafted for them. So, there is not a shred of doubt that writers provide students with professional case study work to meet their criteria.</p>
        </div>
        <div class="col-md-6">
          <h2 class="h6 fw-bold fs-4">Secure Your Budget by Choosing Our Cheap Case Study Help Services</h2>
          <p style="color: black;" class="pt-4">Nobody wants to make high expenses for small services since most of the students are unable to pay high amounts. Assignments Help Ireland is one of the most popular platforms that offers the cheapest case study writing guidance service for all students. Our team charges a minimum amount for each service it provides. This includes proofreading, plagiarism checking, revisions, etc.</p>
          <p style="color: black;" class="pt-4">Our writers highly respect and value every student's financial status, so they ensure that they offer the cheapest services for them. You just need to fill out our form to place your order, and then you are done. We won’t charge any additional fees after you place your order. Even with low charges, our quality work remains professional and high because we focus more on quality.</p>
          <p style="color: black;" class="py-3">Our platform is highly cooperative and helpful for students. We want students to succeed in their exams, so we offer the cheapest case study writing services so that every student can afford them.  </p>
        </div>
      </div>
      <div class="row">
        
        
      </div>
          <div class="mt-5 text-center"><a href="https://www.writemyassignment.ie/contact-us"
              style="background-color: #0b2051; color: white;" class="btn btn-dual-shade">  Order Now</a>
          </div>
      </div>
</section>

<section style="background-color: #DBECFE;" class="mt-5 overflow-hidden pb-5">
  <div class="container mx-auto px-5 py-5">
    <div class="mx-5">
      <h3 style="font-weight: 600; font-size: 2.75rem;" class="text-dark text-center mt-5">Sample Of Our Papers</h3>
    </div>
    <!-- grid start of downloadable form -->
    <div class="row g-4 mt-4 mt-md-5">
      <!-- Grid Col 1 -->
      <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
        <!-- Your content here -->
        <div class="position-relative sample-paper">
          <div
            style="width: 18rem; height: 30rem; background-color: #192E49; margin-left: 2.5rem; rotate: 12deg; border-radius: 1rem;">
          </div>
          <div style="border-radius: 0.75rem;" class="position-absolute top-0 start-0 end-0 bottom-0 bg-white pb-4">
            <p style="font-weight: 600; color: black" class="text-center mt-5">Assignment</p>
            <div class="row p-4">
              <!-- First 2 grid Of Title -->
              <div class="col-lg-4 col-4">
                <p class="text-sm  font-normal ">Title:</p>
              </div>
              <div class="col-lg-8 col-8">
                <p class="text-sm  font-normal ">Strategic Change Management</p>
              </div>
              <hr class="mt-1">
              <!-- Second 2 grid of Discipline -->
              <div class="col-lg-6 col-4">
                <p class="text-sm  font-normal ">Discipline:</p>
              </div>
              <div class="col-lg-6 col-8">
                <p class="text-sm  font-normal ">Management
                </p>
              </div>
              <hr class="mt-1">
              <!-- Third 2 grid of Academic -->
              <div class="col-lg-6 col-7">
                <p class="text-sm  font-normal ">Academic Level:</p>
              </div>
              <div class="col-lg-6 col-5">
                <p class="text-sm  font-normal ">Masters
                </p>
              </div>
              <hr class="mt-1">
              <!-- Fourth 2 grid of Pages -->
              <div class="col-lg-6 col-4">
                <p class="text-sm  font-normal ">Pages:</p>
              </div>
              <div class="col-lg-6 col-8">
                <p class="text-sm  font-normal ">24
                </p>
              </div>
              <hr class="mt-1">
              <!-- Fifth 2 grid of Format -->
              <div class="col-lg-6 col-4">
                <p class="text-sm  font-normal ">Format:</p>
              </div>
              <div class="col-lg-6 col-8">
                <p class="text-sm  font-normal ">Harvard
                </p>
              </div>
              <hr class="mt-1">
            </div>
            <!-- Download Sample Button -->
            <div class="row text-center">
              <a href="{{ asset('samples/Role-of-leadership-Management-in-Provision-of-QA-in-Food-Companies.pdf') }}"
                target="_blank">
                <button class="sample-btn text-white py-2 px-4">
                  Download Sample
                </button></a>
            </div>
            <!-- Order Now Button -->
            <div class="row justify-content text-center mt-3">
              <a href="#" target="_blank">
                <button class="sample-btn text-white py-2 px-4">
                  Order Now
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- Grid Col 2 -->
      <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
        <!-- Your content here -->

        <div class="position-relative sample-paper">
          <div
            style="width: 18rem; height: 30rem; background-color: #192E49; margin-left: 2.5rem; rotate: 12deg; border-radius: 1rem;">
          </div>
          <div style="border-radius: 0.75rem;" class="position-absolute top-0 start-0 end-0 bottom-0 bg-white pb-4">
            <p style="font-weight: 600; color: black" class="text-center mt-5">Assignment</p>
            <div class="row p-4">
              <!-- First 2 grid Of Title -->
              <div class="col-lg-4 col-4">
                <p class="text-sm  font-normal ">Title:</p>
              </div>
              <div class="col-lg-8 col-8">
                <p class="text-sm  font-normal ">Strategic Change Management</p>
              </div>
              <hr class="mt-1">
              <!-- Second 2 grid of Discipline -->
              <div class="col-lg-6 col-4">
                <p class="text-sm  font-normal ">Discipline:</p>
              </div>
              <div class="col-lg-6 col-8">
                <p class="text-sm  font-normal ">Management
                </p>
              </div>
              <hr class="mt-1">
              <!-- Third 2 grid of Academic -->
              <div class="col-lg-6 col-7">
                <p class="text-sm  font-normal ">Academic Level:</p>
              </div>
              <div class="col-lg-6 col-5">
                <p class="text-sm  font-normal ">Masters
                </p>
              </div>
              <hr class="mt-1">
              <!-- Fourth 2 grid of Pages -->
              <div class="col-lg-6 col-4">
                <p class="text-sm  font-normal ">Pages:</p>
              </div>
              <div class="col-lg-6 col-8">
                <p class="text-sm  font-normal ">24
                </p>
              </div>
              <hr class="mt-1">
              <!-- Fifth 2 grid of Format -->
              <div class="col-lg-6 col-4">
                <p class="text-sm  font-normal ">Format:</p>
              </div>
              <div class="col-lg-6 col-8">
                <p class="text-sm  font-normal ">Harvard
                </p>
              </div>
              <hr class="mt-1">
            </div>
            <!-- Download Sample Button -->
            <div class="row text-center">
              <a href="{{ asset('samples/Role-of-leadership-Management-in-Provision-of-QA-in-Food-Companies.pdf') }}"
                target="_blank">
                <button class="sample-btn text-white py-2 px-4">
                  Download Sample
                </button></a>
            </div>
            <!-- Order Now Button -->
            <div class="row justify-content text-center mt-3">
              <a href="#" target="_blank">
                <button class="sample-btn text-white py-2 px-4">
                  Order Now
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- Grid Col 3 -->
      <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
        <!-- Your content here -->

        <div class="position-relative sample-paper">
          <div
            style="width: 18rem; height: 30rem; background-color: #192E49; margin-left: 2.5rem; rotate: 12deg; border-radius: 1rem;">
          </div>
          <div style="border-radius: 0.75rem;" class="position-absolute top-0 start-0 end-0 bottom-0 bg-white pb-4">
            <p style="font-weight: 600; color: black" class="text-center mt-5">Assignment</p>
            <div class="row p-4">
              <!-- First 2 grid Of Title -->
              <div class="col-lg-4 col-4">
                <p class="text-sm  font-normal ">Title:</p>
              </div>
              <div class="col-lg-8 col-8">
                <p class="text-sm  font-normal ">Strategic Change Management</p>
              </div>
              <hr class="mt-1">
              <!-- Second 2 grid of Discipline -->
              <div class="col-lg-6 col-4">
                <p class="text-sm  font-normal ">Discipline:</p>
              </div>
              <div class="col-lg-6 col-8">
                <p class="text-sm  font-normal ">Management
                </p>
              </div>
              <hr class="mt-1">
              <!-- Third 2 grid of Academic -->
              <div class="col-lg-6 col-7">
                <p class="text-sm  font-normal ">Academic Level:</p>
              </div>
              <div class="col-lg-6 col-5">
                <p class="text-sm  font-normal ">Masters
                </p>
              </div>
              <hr class="mt-1">
              <!-- Fourth 2 grid of Pages -->
              <div class="col-lg-6 col-4">
                <p class="text-sm  font-normal ">Pages:</p>
              </div>
              <div class="col-lg-6 col-8">
                <p class="text-sm  font-normal ">24
                </p>
              </div>
              <hr class="mt-1">
              <!-- Fifth 2 grid of Format -->
              <div class="col-lg-6 col-4">
                <p class="text-sm  font-normal ">Format:</p>
              </div>
              <div class="col-lg-6 col-8">
                <p class="text-sm  font-normal ">Harvard
                </p>
              </div>
              <hr class="mt-1">
            </div>
            <!-- Download Sample Button -->
            <div class="row text-center">
              <a href="{{ asset('samples/Role-of-leadership-Management-in-Provision-of-QA-in-Food-Companies.pdf') }}"
                target="_blank">
                <button class="sample-btn text-white py-2 px-4">
                  Download Sample
                </button></a>
            </div>
            <!-- Order Now Button -->
            <div class="row justify-content text-center mt-3">
              <a href="#" target="_blank">
                <button class="sample-btn text-white py-2 px-4">
                  Order Now
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mt-5 home-testimonial">
  <div class="container mx-auto px-5 py-5">
    <h3 class="text-dark text-center mb-5 mx-2 mx-md-4">Testimonials</h3>
    <!-- Customer Carousel  -->
    <div class="slideshow-container">
      <!-- Slide 1 -->
      <div class="mySlidesTwo" style="display: block;">
        <div class="row align-content-center justify-content-center mt-2">
          <div class="testimonial-sec bg-white p-4 shadow" style="border: 2px solid #192E49;">
            <div class="row justify-content-center">
              <img style="width: 100px;" class="rounded-circle"
                src="https://www.assignmentshelp.ae/imgs/images-new/testimonial/testimonials-four.jpg" alt="">
            </div>
            <div class="mt-2">
              <p class="text-center mx-lg-5">I am really amazed at their services. Assignments Help Ireland is the leading platform, and this is not the first time I have used their services, so I can assure you that this company is very professional and affordable. 
              </p>
            </div>
            <ul style="list-style: none; padding-left: 0rem;"
              class="d-flex justify-content-center align-content-center mt-3">
              <li>
                <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false" data-prefix="fas"
                  data-icon="star" class="w-4 text-[#FFCD05]" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 576 512">
                  <path fill="currentColor"
                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                  </path>
                </svg>
              </li>
              <li>
                <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false" data-prefix="fas"
                  data-icon="star" class="w-4 text-[#FFCD05]" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 576 512">
                  <path fill="currentColor"
                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                  </path>
                </svg>
              </li>
              <li>
                <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false" data-prefix="fas"
                  data-icon="star" class="w-4 text-[#FFCD05]" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 576 512">
                  <path fill="currentColor"
                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                  </path>
                </svg>
              </li>
              <li>
                <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false" data-prefix="fas"
                  data-icon="star" class="w-4 text-[#FFCD05]" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 576 512">
                  <path fill="currentColor"
                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                  </path>
                </svg>
              </li>
              <li>
                <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false" data-prefix="fas"
                  data-icon="star" class="w-4 text-[#FFCD05]" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 576 512">
                  <path fill="currentColor"
                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                  </path>
                </svg>
              </li>
            </ul>
            <div class="text-center mt-2">
              <h4>~ Laura Marquee</h4>
            </div>
          </div>
        </div>
      </div>
      <!-- Slide 2 -->
      <div class="mySlidesTwo" style="display: block;">
        <div class="row align-content-center justify-content-center mt-2">
          <div class="testimonial-sec bg-white p-4 shadow" style="border: 2px solid #192E49;">
            <div class="row justify-content-center">
              <img style="width: 100px;" class="rounded-circle"
                src="https://www.assignmentshelp.ae/imgs/images-new/testimonial/testimonials-three.jpg" alt="">
            </div>
            <div class="mt-2">
              <p class="text-center mx-lg-5">Assignments Help Ireland is the most reliable platform. It served thousands of students, including me. I am pleased with their quality work and timely delivery. Highly recommended!
              </p>
            </div>
            <ul style="list-style: none; padding-left: 0rem;"
              class="d-flex justify-content-center align-content-center mt-3">
              <li>
                <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false" data-prefix="fas"
                  data-icon="star" class="w-4 text-[#FFCD05]" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 576 512">
                  <path fill="currentColor"
                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                  </path>
                </svg>
              </li>
              <li>
                <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false" data-prefix="fas"
                  data-icon="star" class="w-4 text-[#FFCD05]" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 576 512">
                  <path fill="currentColor"
                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                  </path>
                </svg>
              </li>
              <li>
                <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false" data-prefix="fas"
                  data-icon="star" class="w-4 text-[#FFCD05]" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 576 512">
                  <path fill="currentColor"
                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                  </path>
                </svg>
              </li>
              <li>
                <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false" data-prefix="fas"
                  data-icon="star" class="w-4 text-[#FFCD05]" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 576 512">
                  <path fill="currentColor"
                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                  </path>
                </svg>
              </li>
              <li>
                <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false" data-prefix="fas"
                  data-icon="star" class="w-4 text-[#FFCD05]" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 576 512">
                  <path fill="currentColor"
                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                  </path>
                </svg>
              </li>
            </ul>
            <div class="text-center mt-2">
              <h4>~ Henry James  </h4>
            </div>
          </div>
        </div>
      </div>
      <!-- Slide 3 -->
      <div class="mySlidesTwo" style="display: block;">
        <div class="row align-content-center justify-content-center mt-2">
          <div class="testimonial-sec bg-white p-4 shadow" style="border: 2px solid #192E49;">
            <div class="row justify-content-center">
              <img style="width: 100px;" class="rounded-circle"
                src="https://www.assignmentshelp.ae/imgs/images-new/testimonial/testimonials-two.jpg" alt="">
            </div>
            <div class="mt-2">
              <p class="text-center mx-lg-5">Assignments Help Ireland is an easy and affordable platform offering a variety of online assignment services with professionalism. I am amazed with the grades that I have obtained after using their services. It is a reliable platform, and I highly recommend it. 

              </p>
            </div>
            <ul style="list-style: none; padding-left: 0rem;"
              class="d-flex justify-content-center align-content-center mt-3">
              <li>
                <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false" data-prefix="fas"
                  data-icon="star" class="w-4 text-[#FFCD05]" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 576 512">
                  <path fill="currentColor"
                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                  </path>
                </svg>
              </li>
              <li>
                <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false" data-prefix="fas"
                  data-icon="star" class="w-4 text-[#FFCD05]" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 576 512">
                  <path fill="currentColor"
                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                  </path>
                </svg>
              </li>
              <li>
                <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false" data-prefix="fas"
                  data-icon="star" class="w-4 text-[#FFCD05]" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 576 512">
                  <path fill="currentColor"
                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                  </path>
                </svg>
              </li>
              <li>
                <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false" data-prefix="fas"
                  data-icon="star" class="w-4 text-[#FFCD05]" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 576 512">
                  <path fill="currentColor"
                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                  </path>
                </svg>
              </li>
              <li>
                <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false" data-prefix="fas"
                  data-icon="star" class="w-4 text-[#FFCD05]" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 576 512">
                  <path fill="currentColor"
                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                  </path>
                </svg>
              </li>
            </ul>
            <div class="text-center mt-2">
              <h4>~ Peter Phillips </h4>
            </div>
          </div>
        </div>
      </div>
      <!-- Slide 4 -->
      <div class="mySlidesTwo" style="display: block;">
        <div class="row align-content-center justify-content-center mt-2">
          <div class="testimonial-sec bg-white p-4 shadow" style="border: 2px solid #192E49;">
            <div class="row justify-content-center">
              <img style="width: 100px;" class="rounded-circle"
                src="https://www.assignmentshelp.ae/imgs/images-new/testimonial/testimonials-one.jpg" alt="">
            </div>
            <div class="mt-2">
              <p class="text-center mx-lg-5">One of the best platforms I have ever serviced. They offer highly affordable services with cheap prices, and the writers are very professional, highly educated, and experienced. They provided me with a solid piece of work. Thank you!
              </p>
            </div>
            <ul style="list-style: none; padding-left: 0rem;"
              class="d-flex justify-content-center align-content-center mt-3">
              <li>
                <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false" data-prefix="fas"
                  data-icon="star" class="w-4 text-[#FFCD05]" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 576 512">
                  <path fill="currentColor"
                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                  </path>
                </svg>
              </li>
              <li>
                <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false" data-prefix="fas"
                  data-icon="star" class="w-4 text-[#FFCD05]" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 576 512">
                  <path fill="currentColor"
                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                  </path>
                </svg>
              </li>
              <li>
                <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false" data-prefix="fas"
                  data-icon="star" class="w-4 text-[#FFCD05]" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 576 512">
                  <path fill="currentColor"
                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                  </path>
                </svg>
              </li>
              <li>
                <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false" data-prefix="fas"
                  data-icon="star" class="w-4 text-[#FFCD05]" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 576 512">
                  <path fill="currentColor"
                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                  </path>
                </svg>
              </li>
              <li>
                <svg style="width: 1rem; color: #FFCD05;" aria-hidden="true" focusable="false" data-prefix="fas"
                  data-icon="star" class="w-4 text-[#FFCD05]" role="img" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 576 512">
                  <path fill="currentColor"
                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                  </path>
                </svg>
              </li>
            </ul>
            <div class="text-center mt-2">
              <h6>~ Eric Porter</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-2 pb-5">
        <span class="dotTwo" onclick="currentSlideTwo(1)"></span>
        <span class="dotTwo" onclick="currentSlideTwo(2)"></span>
        <span class="dotTwo activeOne" onclick="currentSlideTwo(3)"></span>
        <span class="dotTwo" onclick="currentSlideTwo(4)"></span>
      </div>
    </div>
  </div>
</section>

<section class="section30" id="ire-accordion-section">
  <div class="container">
    <div class="row">

      <div style="background-image: url(images/bg-image.jpg); background-size: cover; background-repeat: no-repeat;"
        class="order-1 order-md-0 col-md-5">
        <div id="accordion" style="padding: 30px;" class="ireland-students-faq assignment">
          <h3 class="py-3" style="color: #192E47; text-align: left;">Frequently Asked Questions</h3>
          <div class="card mb-0 border-0">
            <div class="accortion-list">
              <div class="card-header mt-0 collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false">
                <a class="card-title"> Is there an easy way to solve a case study?</a></div>
              <div id="collapseOne" class="card-body collapse" data-parent="#accordion" style="">
                <p>A case study requires a deep analysis and investigation. The easy way to solve a case study is to provide the most supportive and proven work evidence.  </p>
              </div>
            </div>
            <div class="accortion-list">
              <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                aria-expanded="false"> <a class="card-title">Can I get a free case study?</a></div>
              <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
                <p>Yes, you can search the internet and visit some websites providing free case study samples. </p>
              </div>
            </div>
            <div class="accortion-list">
              <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                aria-expanded="false"> <a class="card-title">Are there any disadvantages of case studies?</a></div>
              <div id="collapseThree" class="card-body collapse" data-parent="#accordion">
                <p>Case students have several disadvantages including difficulty in making a copy, time-consuming, and expensive.  </p>
              </div>
            </div>
            <div class="accortion-list">
              <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"
                aria-expanded="false"> <a class="card-title">Can I Pay Someone to Write My Case Study?</a></div>
              <div id="collapseFour" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <p>Yes, you can definitely pay someone to write your case study or hire professional case study writers at an affordable cost.   </p>
                </div>
              </div>
            </div>
            <div class="accortion-list">
              <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"
                aria-expanded="false"> <a class="card-title">Where can I find professional assistance for my case study?</a></div>
              <div id="collapseFour" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <p>There are many online platforms that offer professional assistance for case study, so you can find them on the internet.  </p>
                </div>
              </div>
            </div>
            <div class="accortion-list">
              <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"
                aria-expanded="false"> <a class="card-title">Helpful Strategies for Writing Case Study?</a></div>
              <div id="collapseFour" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <p>There are many helpful strategies for writing case studies including formatting, quotation analysis, introduction, call to action, etc.  </p>
                </div>
              </div>
            </div>
            
           
          </div>
        </div>
      </div>
      <div class="text-center order-sm-1 col-md-7 mb-3 mb-md-0">
        <div class="solved-assignment"> <a href="#"><img src="images/Assignment Help Ireland web image.png" width="90%"
              alt="online-assignment-writer.webp" class="img-fluid lazyloaded"><noscript><img
                src="images/Assignment Help Ireland web image.png" alt="online-assignment-writer.webp"
                class="img-fluid"></noscript></a></div>
      </div>
    </div>
  </div>
</section>

<section>

  <div class="my-5 container-fluid py-5 px-4" style="background-image: linear-gradient(to right, #C5D2DB , #3B7090);">
    <div class="container">
      <!-- row -->
      <div class="row align-items-center g-0">
        <!-- img -->
        <div class="d-none d-lg-inline-block col-xl-5 col-lg-6 col-md-12 text-left pt-6">
          <img src="images/cta-img.png" width="90%" alt="" class="img-fluid">
        </div>
        <div class="cta-text col-xl-7 col-lg-6 col-md-12">
          <!-- heading -->
          <div>
            <h3 class="text-white display-6 fw-bold pe-lg-8">Bring Huge Perfection in Your Results - The Best Case Study Help Services 
            </h3>
            <!-- text -->
            <p class="text-white mb-4 lead">
              Hire our top case study writers and bring your results to the top.
            </p>
            <!-- btn -->
            <a href="#" style="background-color: white; color: #0b2051;" class="btn">Order case study help online!</a>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection
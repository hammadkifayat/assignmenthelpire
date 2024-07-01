@extends('layouts.web')
@section('title', ' Professional Assignment Help Ireland By Our Experts')
@section('description', ' Get remarkable exam grades through professional assignment help Ireland services. Meet our expert writers and collaborate with them for assignment writing. ')
@section('canonical', config('app.url') . Request::path())
@section('content')
<section class="home-banner text-center text-lg-start">
  <div class="container">
    <div class="row align-items-center sm-px-4">
      <div class="col-lg-4">
        <h4 style="font-size: 1.6rem; font-weight: bold;"
         class="text-uppercase font-weight-bold text-light mb-2">Best Assignment Help Ireland Services
         -<span style="color: #192D48;">" Get A+ Grade "</span> By Irish Experts"</h4>
        <p class="text-dark font-weight-bold mb-2">Assignments Help Ireland provides a wide range of services for university students, from highly professional and skilled assignment writers. Our services are available across Ireland, where we serve more than 48,000 students by writing professional assignments for them. Assignments Help Ireland is one of the top platforms with more than 10 years of experience and 98% positive reviews. </p>
        <p class="text-dark">Our company ensures to provide you with quality work that meets all your assignment requirements within the deadline. We also provide free revisions if you think there’s a need to make some changes to the assignment. So, get the top assignment help Ireland services now. </p>
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
                  class="btn btn-md d-block btn-dual-shade w-100"> Order reliable services now!</button>
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
        </div><img src="images/Main Image.png" class="img-fluid dem lazyloaded" alt="Write My Assignment IE"
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
      </div>
    </div>
  </div>

</section>

{{-- <div class="row "> --}}
  {{-- <img class="" src="{{ asset('images/Separator.svg')}}" alt="asg">
</div> --}}

<!--====================== Start Content Section ======================-->
<section>
  <div style="background: #DBECFE;" class="container-fluid py-5 px-5">
    <div class="content-wrapper text-center">
      <h2 style="color: #182E47;" class="fs-2 mb-4 font-weight-bold">Delivering the Extraordinary Assignment Writing Services to Ireland Students </h2>
      <p style="color: #182E47;" class="mb-4">Assignments Help Ireland is keen to provide the most outstanding services in Ireland. Our entire team is highly experienced in crafting the content for your assignment by providing you with easy and flexible online services that will satisfy all your needs. Our assignment-writing company has professional and skilled assignment writers who will help you out with assignments.</p>

      <p style="color: #182E47;">Our writers also specialize in researching, proofreading, formatting, and editing. Assignments Help Ireland has provided services to thousands of students and helped them achieve their desired grades. Therefore, once you order our services, we guarantee the best results with outstanding grades.</p>
    </div><!--.content-wrapper-->
  </div>
</section>
<!--====================== End Content Section ======================-->

{{-- <div class="row mt-8 hide-on-mobile">
  <img class="" src="{{ asset('images/Separator.svg')}}" alt="asg">
</div> --}}

<section class="section50 py-5" id="how-ireland-works">
  <div class="container">
    <div class="heading">
      <h2 class="heading-title text-center mb-5"> Assignments Help Ireland Procedure </h2>
    </div>
    <div class="row pb-3 sm-px-4">
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
    <span class="d-flex justify-content-center"> <a href="#" class="btn-new">Send Us Query Now</a>
  </div>

  </span>
</section>

<!-- 14th section custom essay writing -->
<section class="overflow-hidden my-4 py-4">
  <div class=" container px-3">
    <div class="row mb-5 align-items-center sm-px-4">
      <div class="col-lg-6 p-4">
        <h2 class="text-2xl mb-6 font-medium">
        Our Collaboration with Best Assignment Writers to Get Your Tasks Done with Perfection
        </h2>
        <p>
        At Assignment Help Ireland you can collaborate with our qualified and professional assignment writers to complete your tasks perfectly. We urge you to avail of our services since we have a high percentage of orders across Ireland from students from different universities. Assignments Help Ireland’s perfect collaboration with assignment writers has made it the leading platform in Ireland. 
        </p>
        <br>
        <p>
        It is entirely certain that we provide you with the best assignment help experiences that you may never have had before. Our unique online writing services will provide you with better assistance and timely delivery. So it is not too late for you to choose our services now and increase your grades. 
        </p>
        <!-- Order Now Button -->
        <div class="mx-auto text-center text-lg-start mt-12 mt-lg-5">
          <a href="#">
            <button style="border-radius: 30px 0px 30px 0px; background-color: #192D48; color: white;"
              class="px-4 btn py-3">
              Hire Professional Assignment Writer
            </button>
          </a>
        </div>
      </div>
      <div class="text-center col-lg-6 p-3">
        <img src="images/01.jpg" width="100%" alt="asg" class="img-fluid">
      </div>
    </div>
    <div class="row align-items-center sm-px-4">
      <div class="text-center col-lg-6 p-3 order-2 order-md-1">
        <img src="images/02.jpg" width="100%" alt="asg" class="img-fluid">
      </div>
      <div class="col-lg-6 p-4 order-1 order-md-2">
        <h2 class="text-2xl mt-4 my-4 font-medium">
        The Most Renowned Assignment Help Services Across all Over Ireland
        </h2>
        <p>
        If you are looking for professional assignment writing services Ireland, don’t worry. Join our hands to get professional academic writing assistance for your assignments. Meet our top assignment writing experts who will help you complete your assignments in professional ways. Our expert writers are committed to providing you with the best content by using various proven writing strategies that will bring a remarkable change in your grades. 
        </p>
        <br>
        <p>
        Furthermore, our writers provide the best assurance that the content they write meets the complete assignment requirements the way you want. Our writers offer various writing services, including theses, case studies, essays, and research papers. So, we encourage you to seek help from our professionals today. 
        </p>
        <!-- Order Now Button -->
        <div class="mx-auto text-center text-lg-start mt-12 mt-lg-5">
          <a href="#">
            <button style="border-radius: 30px 0px 30px 0px; background-color: #192D48; color: white;"
              class="px-4 btn py-3">
              Get Ireland Assignment Help
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="container-lg incentives benefits" id="benefits">
  <div class="container-lg img-boxes">
    <div class="row sm-px-4">
      <div class="col-md-12">
        <h3 class="text-center">
        Why Choose Assignments Help Ireland?
        </h3>
        <p class="text-center">
        We provide a wide range of Irish assignment help services remotely with flexible timings, including case study writing, essay writing, research writing, etc. We ensure that you receive on-time delivery with free revisions. 
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 exlore_benefits type_benefits">
        <div class="quality-boxes">
          <div class="row sm-px-4">
            <div class="col-md-6 mb-3">
              <div class="wrapperz pb-4">
                <div class="box">
                  <img src="images/__Low price.png" alt="Quality img">
                </div>
                <div class="wrapper-box-content">
                  <h4 class="qualtiy-box-title">Affordable Assignment Help Services</h4>
                  <p class="wrapper-text">
                  We assure you that our services are highly affordable for students with various financial standards. Our services are cheap yet professional for everyone. 


                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class=" wrapperz pb-4">
                <div class="box">
                  <img src="images/__Experienced Writers.png" alt="writer img">
                </div>
                <div class="wrapper-box-content">
                  <h4 class="qualtiy-box-title">Professional Assignment Writers Help</h4>
                  <p class="wrapper-text">
                  We have a team of writers with professional experience to ensure you will receive quality work without exception. So, you don’t need to worry about your tasks since our writers are here for you.


                  </p>
                </div>

              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="wrapperz pb-4">
                <div class="box">
                  <img src="images/__Timely Delivery.png" alt="deadline img">
                </div>
                <div class="wrapper-box-content">
                  <h4 class="qualtiy-box-title">Fast Delivery</h4>
                  <p class="wrapper-text">
                  We believe that time is important for everyone. Since we offer fast delivery, we will always provide you with your completed task before the deadline with quality. 
                  </p>
                </div>

              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="wrapperz pb-4">
                <div class="box">
                  <img src="images/100-Plag free.png" alt="source img">
                </div>
                <div class="wrapper-box-content">
                  <h4 class="qualtiy-box-title">100% Plagiarism-Free Content</h4>
                  <p class="wrapper-text">
                  Our team of writers always provides original, 100% plagiarism-free content without copyright issues. We also assure you of the best work. 

                  </p>
                </div>

              </div>
            </div>
            <div class="col-md-6">
              <div class="wrapperz pb-4">
                <div class="box">
                  <img src="images/__24-7 customer support.png" alt="support img">
                </div>
                <div class="wrapper-box-content">
                  <h4 class="qualtiy-box-title">24-hour Customer Support </h4>
                  <p class="wrapper-text">
                  We provide our clients with 24-hour support, so you can freely contact us at any time with any queries or doubts. 
                  </p>
                </div>

              </div>
            </div>
            <div class="col-md-6">
              <div class="wrapperz pb-4">
                <div class="box">
                  <img src="images/__Free samples.png" alt="hidden img">
                </div>
                <div class="wrapper-box-content">
                  <h4 class="qualtiy-box-title">Free Work Examples</h4>
                  <p class="wrapper-text">
                  We also offer our free work examples to clients to give them an idea of our quality work, and they will deliver it to them. <a href="#"></a></p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class=" py-5 free-feature sm-px-4">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h4>Have a Look at Our Free Packages </h4>
        <p class="wrapper-text">
        Get our free online assignment packages.
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

<section class="writers">
  <div class="position-relative px-0 pb-5">
    <div style="padding-left: 2rem; padding-right: 2rem;" class="container mx-auto">
      <h3 style="color: #5A5959;" class="text-center mt-5">Meet Our Best Assignment Writers Online 
        <span class="text-[#EF443B]"> 
        </span>
      </h3>

      <div class="lg:p-16 pt-4 pb-8">

        <div class="slideshow-container">
          <div style="display: block;" class="mySlides">
            <div class="professional-box">
              <div class="row align-items-center g-0">
                <div class="col-lg-3"><img class="img-fluid lazyload mx-auto d-block"
                    src="https://www.assignmentshelp.ae/imgs/images-new/person-one.svg" alt="Mark Lee" title="Mark Lee"
                    loading="lazy" width="250" height="180">
                </div>
                <div class="col-lg-9">


                  <div class="team-box">
                    <div class="row">
                      <div class="col-md-6 "><h4 class="h5 mb-0">Mark Lee</h4>
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
                          <div class="col-md-6"><h5  class="">PhD Degree</h5>
                          </div>
                          <div class="col-md-6"><h5>18,752 <span
                                style="font-weight: normal">Orders
                                </span></h5></div>
                        </div>
                        <div class="row mt-3 g-0">
                          <div class="col-md-6"><h5> 14,925 <span> Reviews
                                </span></h5></div>
                          <div class="col-md-6"><h5> 98% <span
                                style="font-weight: normal;">Success Rate</span></h5>
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
                          <p>
                            Mark Lee has offered professional services for over five years with a 5-star rating and a 98% success 
                            rate and has completed 8000 orders in Assignment Help Ireland. He is qualified with a PhD and specializes 
                            in many different modes of writing, including case studies, reports, essays, and more. His written documents 
                            always help students achieve better grades across Ireland.                           
                          </p>
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
                    src="https://www.assignmentshelp.ae/imgs/images-new/person-three.svg" alt="Jack Martin " title="Jack Martin "
                    loading="lazy" width="250" height="180">
                </div>
                <div class="col-lg-9">


                  <div class="team-box">
                    <div class="row">
                      <div class="col-md-6"><h4 class="h5 mb-0">Jack Martin </h4>
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
                          <div class="col-md-6"><h5 style="font-weight: 600;"> 8,215  Orders  <span
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
                          <p>
                            Jack Martin, with 10 years of experience in Assignments Help Ireland, completed more than 8000 orders 
                            with a 4.9/5 rating and received 7,000 reviews. He helped thousands of students across Ireland with his 
                            professional writing services. He is qualified with a master's in English and outstanding grades. The 
                            studying company appreciated him for his quality services, as his success rate is 99%.                          
                          </p>
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
                    src="https://www.assignmentshelp.ae/imgs/images-new/person-two.svg" alt="Cathy Goodman " title="Cathy Goodman "
                    loading="lazy" width="250" height="180">
                </div>
                <div class="col-lg-9">


                  <div class="team-box">
                    <div class="row">
                      <div class="col-md-6"><span class="h5 mb-0">Cathy Goodman </span>
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
                          <div class="col-md-6"><span style="font-weight: 600;" class="">MPhil Degree</span>
                          </div>
                          <div class="col-md-6"><span style="font-weight: 600;"> 10,012 <span
                                style="font-weight: normal">Orders
                                </span></span></div>
                        </div>
                        <div class="row mt-3 g-0">
                          <div class="col-md-6"><span style="font-weight: 600;">9,565 <span
                                style="font-weight: normal;">Reviews
                                </span></span></div>
                          <div class="col-md-6"><span style="font-weight: 600;"> 99%  <span
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
                          <p>
                            Cathy is one of our brilliant writers who has completed 10,000 orders with her amazingly high-quality 
                            content and received nearly 9,500 reviews. She is qualified with an MPhil and has helped several students 
                            with various tasks with quality work and timely delivery. Students across Ireland, including Dublin, greatly 
                            honour her professional services due to her 5-star rating and 99% success rate.  
                          </p>
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
                    src="https://www.assignmentshelp.ae/imgs/images-new/person-one.svg" alt="Tiffany James  " title="Tiffany James  "
                    loading="lazy" width="250" height="180">
                </div>
                <div class="col-lg-9">


                  <div class="team-box">
                    <div class="row">
                      <div class="col-md-6"><h4 class="h5 mb-0">Tiffany James  </h4>
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
                          <div class="col-md-6"><h5 style="font-weight: 600;">18,263  <span
                                style="font-weight: normal">Orders
                                </span></h5></div>
                        </div>
                        <div class="row mt-3 g-0">
                          <div class="col-md-6"><h5 style="font-weight: 600;">16,113  <span
                                style="font-weight: normal;"> Reviews
                                </span></h5></div>
                          <div class="col-md-6"><h5 style="font-weight: 600;"> 98% <span
                                style="font-weight: normal;">Success Rate</span></h5>
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
                          <p>
                            Tiffany has been working at Assignments Help Ireland for 5 years and providing incredible content 
                            that has won the hearts of several students. Her excellent writing skills have helped many students 
                            achieve good grades and succeed in their university exams. She is qualified with PhD in Journalism 
                            and has a success rate of 98%. She has completed more than 2000 orders with her professional skills, 
                            has a 4.9/5 star rating, 1500 reviews, and is highly honored worldwide. 
                          </p>
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
          <span class="dot activeOne" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
        </div>
      </div>
    </div>
  </div>
</section>

<section style="background-color: #DBECFE; padding: 80px 0px 80px 0px;" class="content bg-content">
  <div class="container sm-px-4">
    <div style="padding-left: 1rem;" class="row">
      <div class="row m-t-20">
        <div class="col-md-6">
          <h2 class="h6 fw-bold fs-4">Best Assignment Writing Service Ireland to Secure Top Grades </h2>
          <p style="color: black;" class="pt-4">Assignments Help Ireland is one of the companies that will provide you with the best quality assignments to improve your grades. Our professional writers are well-educated and skilled and will use the most reliable tactics to provide help with assignment without making any sort of errors. So you won’t be discouraged through their services. Whether you are looking for essay writing, research writing, a thesis, or something else, we are certain that our services will not only help you craft a perfect assignment but also help you learn the fundamentals for writing an excellent assignment. </p>
          <p style="color: black;" class="py-3" >We are glad to work on time. Many students across Ireland successfully graduated from their institutions with excellent grades. We are glad that we have contributed to assignment help for such students, which has helped them stand out at the top of their academic results. So, join the best assignment help Ireland now and make the most of your academic progress.  </p>
        </div>
        <div class="col-md-6">
          <h2 class="h6 fw-bold fs-4"> Ireland’s Top-Rated Multitasking Assignment Writing Company</h2>
          <p style="color: black;" class="pt-4">Are you among those students who are struggling with hard and tough assignments? Well, our team is ready for you. Join our community, get our services, and make your teacher speechless. By choosing our services, you won’t get trapped in the complexities of your assignment and late delivery timing. Our team of excellent writers is expert in writing and will provide you with mind-blowing work that will shock and flaunt your teacher. We are certain that the assignments we provide are professionally written and will be delivered to you on time. </p>
          <p style="color: black;" class="py-3">Moreover, our writing team is happy to help you with any additional assignment work you may have. We have served thousands of clients across Ireland from various cities, including Dublin, Waterford, Cork, Galway, etc. So, never lose hope since our team is ready to provide you with the work you need to fulfill all your requirements.  </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h2 class="h6 fw-bold fs-4"> Safe &amp; Cheap Services of Assignment Help in Ireland For Students of All Financial Status </h2>
          <p style="color: black;" class="pt-4">It has now become hard for many students to avail of professional assignment help services since they are highly expensive. Any assignment is not worth delivering without professional writing. But there’s no need to get frustrated since Assignments Help Ireland is one of the leading professional assignment writing companies that offers professional assignment help services at the cheapest cost.</p>
          <p style="color: black;" class="py-3">So, we are among the top companies in Ireland that provide students with cheap assignment help services so they don’t feel discouraged or demotivated by their assignment grades. Our team does their best to write assignments in a very professional way at a very cheap cost so that every student can afford our services. You can buy assignment help in all cities of Ireland including Dublin, Waterford, Cork, Galway, Cashel, Sligo, and many others.</p>
        </div>
        <div class="col-md-6">
          <h2 class="h6 fw-bold fs-4">Hire Expert Assignment Writers for Flawless Results</h2>
          <p style="color: black;" class="pt-4">Our community aims to provide the top Irish assignment help services across Ireland and many of its cities, including Dublin. We receive a large number of messages from students who send online requests to do their assignments throughout Ireland. Our large scale of services ensures that our work is accepted and admired throughout Ireland, and no community is better than ours in providing the best and top assignment help services.</p>
          <p style="color: black;" class="pt-4">Moreover, we ensure that our team of writers meets all the demands and requirements of students in completing their assignments. So, it is our promise that we will help you cope with the assignment's complexities and provide you with professional work with timely delivery that will definitely increase your grades and the overall results of your exam. </p>
          <p style="color: black;" class="py-3">We also promise to provide 24/7 support in case you need any help, need an urgent assignment writing service, or request revisions. We offer unlimited revisions, so there’s no need to feel discouraged. </p>
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
              <h4>~ Henry James </h4>
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
              <h4>~ Eric Porter</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-2 pb-5">
        <span class="dotTwo" onclick="currentSlideTwo(1)"></span>
        <span class="dotTwo" onclick="currentSlideTwo(2)"></span>
        <span class="dotTwo " onclick="currentSlideTwo(3)"></span>
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
                <a class="card-title"> Why to hire Writers from Ireland Assignment Help
                  Only</a></div>
              <div id="collapseOne" class="card-body collapse" data-parent="#accordion" style="">
                <p> Assignments Help Ireland is the leading platform in Ireland. We offer high-quality services across Ireland, including Dublin, Waterford, Cork, Galway, Sligo, etc. We are highly regarded throughout the country. Our writers are highly expert and professional.</p>
              </div>
            </div>
            <div class="accortion-list">
              <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                aria-expanded="false"> <a class="card-title"> What kind of writing services do you offer?</a></div>
              <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
                <p>We offer a wide variety of services, including case studies, thesis, coursework, research papers, and many more. </p>
              </div>
            </div>
            <div class="accortion-list">
              <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                aria-expanded="false"> <a class="card-title"> Do you maintain privacy?</a></div>
              <div id="collapseThree" class="card-body collapse" data-parent="#accordion">
                <p>Yes, we provide complete privacy so that students do not face any issues.  </p>
              </div>
            </div>
            <div class="accortion-list">
              <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"
                aria-expanded="false"> <a class="card-title"> Do you follow all Ireland University guidelines?</a></div>
              <div id="collapseFour" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <p>Yes, we make sure that we follow the guidelines of all Ireland universities and provide the students with the assignment work and per their requirements. </p>
                </div>
              </div>
            </div>
            <div class="accortion-list">
              <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive"
                aria-expanded="false"> <a class="card-title"> Do you offer revisions?</a></div>
              <div id="collapseFive" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <p>We offer free unlimited revisions for students as per their ease.</p>
                </div>
              </div>
            </div>
            <div class="accortion-list">
              <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix"
                aria-expanded="false"> <a class="card-title">How much time will you need to finish my assignment?</a></div>
              <div id="collapseSix" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <p>It takes us a few hours to several days or a few weeks to complete an assignment. However, we do our best to deliver it as early as possible. </p>
                </div>
              </div>
            </div>
            <div class="accortion-list">
              <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven"
                aria-expanded="false"> <a class="card-title">Do you provide assignment help for any topic?</a></div>
              <div id="collapseSeven" class="collapse" data-parent="#accordion" style="">
                <div class="card-body">
                  <p>Yes, we provide students with online assignment help regardless of the topic. </p>
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
            <h3 class="text-white display-6 fw-bold pe-lg-8">Top Assignment Writing Services All Over the Ireland
            </h3>
            <!-- text -->
            <p class="text-white mb-4 lead">
            Join us, use our services, and make the best out of your exam results. 
            </p>
            <!-- btn -->
            <a href="#" style="background-color: white; color: #0b2051;" class="btn">Order Assignment Help Online!</a>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection
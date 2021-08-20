<?php require_once INCLUDES . 'inc_header.php'; ?>

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
  <!--begin::Container-->
  <div class="container" id="kt_content_container">
    <?php echo Flasher::flash(); ?>
    <!--begin::Card-->
    <div class="card">
      <!--begin::Card header-->
      <div class="card-header border-0 pt-6">
        <!--begin::Card title-->
        <div class="card-title">
          <!--begin::Search-->
          <div class="d-flex align-items-center position-relative my-1">
            <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
            <span class="svg-icon svg-icon-1 position-absolute ms-6">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <rect x="0" y="0" width="24" height="24" />
                  <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                  <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                </g>
              </svg>
            </span>
            <!--end::Svg Icon-->
            <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers" />
          </div>
          <!--end::Search-->
        </div>
        <!--begin::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
          <!--begin::Toolbar-->
          <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
            <!--begin::Filter-->
            <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
              <!--begin::Svg Icon | path: icons/duotone/Text/Filter.svg-->
              <span class="svg-icon svg-icon-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <path d="M5,4 L19,4 C19.2761424,4 19.5,4.22385763 19.5,4.5 C19.5,4.60818511 19.4649111,4.71345191 19.4,4.8 L14,12 L14,20.190983 C14,20.4671254 13.7761424,20.690983 13.5,20.690983 C13.4223775,20.690983 13.3458209,20.6729105 13.2763932,20.6381966 L10,19 L10,12 L4.6,4.8 C4.43431458,4.5790861 4.4790861,4.26568542 4.7,4.1 C4.78654809,4.03508894 4.89181489,4 5,4 Z" fill="#000000" />
                  </g>
                </svg>
              </span>
              <!--end::Svg Icon-->Filtro
            </button>
            <!--begin::Menu 1-->
            <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
              <!--begin::Header-->
              <div class="px-7 py-5">
                <div class="fs-4 text-dark fw-bolder">Filter Options</div>
              </div>
              <!--end::Header-->
              <!--begin::Separator-->
              <div class="separator border-gray-200"></div>
              <!--end::Separator-->
              <!--begin::Content-->
              <div class="px-7 py-5">
                <!--begin::Input group-->
                <div class="mb-10">
                  <!--begin::Label-->
                  <label class="form-label fs-5 fw-bold mb-3">Month:</label>
                  <!--end::Label-->
                  <!--begin::Input-->
                  <select class="form-select form-select-solid fw-bolder" data-control="select2" data-placeholder="Selecciona un Mes" data-allow-clear="true" data-kt-customer-table-filter="mes">
                    <option></option>
                    <option value="aug">August</option>
                    <option value="sep">September</option>
                    <option value="oct">October</option>
                    <option value="nov">November</option>
                    <option value="dec">December</option>
                  </select>
                  <!--end::Input-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="mb-10">
                  <!--begin::Label-->
                  <label class="form-label fs-5 fw-bold mb-3">Payment Type:</label>
                  <!--end::Label-->
                  <!--begin::Options-->
                  <div class="d-flex flex-column flex-wrap fw-bold" data-kt-customer-table-filter="payment_type">
                    <!--begin::Option-->
                    <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                      <input class="form-check-input" type="radio" name="payment_type" value="all" checked="checked" />
                      <span class="form-check-label text-gray-600">All</span>
                    </label>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                      <input class="form-check-input" type="radio" name="payment_type" value="visa" />
                      <span class="form-check-label text-gray-600">Visa</span>
                    </label>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <label class="form-check form-check-sm form-check-custom form-check-solid mb-3">
                      <input class="form-check-input" type="radio" name="payment_type" value="mastercard" />
                      <span class="form-check-label text-gray-600">Mastercard</span>
                    </label>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                      <input class="form-check-input" type="radio" name="payment_type" value="american_express" />
                      <span class="form-check-label text-gray-600">American Express</span>
                    </label>
                    <!--end::Option-->
                  </div>
                  <!--end::Options-->
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="d-flex justify-content-end">
                  <button type="reset" class="btn btn-white btn-active-light-primary me-2" data-kt-menu-dismiss="true" data-kt-customer-table-filter="reset">Reset</button>
                  <button type="submit" class="btn btn-primary" data-kt-menu-dismiss="true" data-kt-customer-table-filter="filter">Apply</button>
                </div>
                <!--end::Actions-->
              </div>
              <!--end::Content-->
            </div>
            <!--end::Menu 1-->
            <!--end::Filter-->
            <!--begin::Add-->
            <?php
            if (isset($d->button)) {
              echo sprintf(
                '<a href="%s" class="btn btn-%s">
                  <span class="svg-icon svg-icon-2"> %s </span>
                  %s
                </a>',
              isset($d->button->url) ? $d->button->url : '#',
              isset($d->button->class) ? $d->button->class : 'primary',
              isset($d->button->icon) ? $d->button->icon : ' <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
              <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
              <rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000)" x="4" y="11" width="16" height="2" rx="1" />
                </svg>',
              isset($d->button->text) ? $d->button->text : 'Sin texto'
            );
            }

            ?>
            <!--end::Add-->
          </div>
          <!--end::Toolbar-->
          <!--begin::Group actions-->
          <div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
            <div class="fw-bolder me-5">
              <span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected
            </div>
            <button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">Delete Selected</button>
          </div>
          <!--end::Group actions-->
        </div>
        <!--end::Card toolbar-->
      </div>
      <!--end::Card header-->
      <!--begin::Card body-->
      <div class="card-body pt-0">
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="subjects_table">
          <!--begin::Table head-->
          <thead>
            <!--begin::Table row-->
            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
              <th></th>
              <th class="min-w-125px">Customer Name</th>
              <th class="min-w-125px">Email</th>
              <th class="min-w-125px">Company</th>
              <th class="min-w-125px">Payment Method</th>
              <th class="min-w-125px">Created Date</th>
              <th class="text-end min-w-70px">Actions</th>
            </tr>
            <!--end::Table row-->
          </thead>
          <!--end::Table head-->
          <!--begin::Table body-->
          <tbody class="fw-bold text-gray-600">

          <?php for($i = 0; $i < count($d->subjects); $i++):  ?>
            <tr>
              <!--begin::Checkbox-->
              <td>
                <div class="form-check form-check-sm form-check-custom form-check-solid">
                  <input class="form-check-input" type="checkbox" value="1" />
                </div>
              </td>
              <!--end::Checkbox-->
              <!--begin::Name=-->
              <td>
                <a href="/jet-html-pro/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1"><?= $d->subjects[$i]->name ?></a>
              </td>
              <!--end::Name=-->
              <!--begin::Email=-->
              <td>
                <a href="#" class="text-gray-600 text-hover-primary mb-1">emma@intenso.com</a>
              </td>
              <!--end::Email=-->
              <!--begin::Company=-->
              <td>B&amp;T Legal Services</td>
              <!--end::Company=-->
              <!--begin::Payment method=-->
              <td data-filter="mastercard">
                <img src="/jet-html-pro/assets/media/svg/card-logos/mastercard.svg" class="w-35px me-3" alt="" />**** 5242
              </td>
              <!--end::Payment method=-->
              <!--begin::Date=-->
              <td>14 Aug 2020, 1:21 pm</td>
              <!--end::Date=-->
              <!--begin::Action=-->
              <td class="text-end">
                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions
                  <!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
                  <span class="svg-icon svg-icon-5 m-0">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
                      </g>
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </a>
                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="/jet-html-pro/apps/customers/view.html" class="menu-link px-3">View</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                  </div>
                  <!--end::Menu item-->
                </div>
                <!--end::Menu-->
              </td>
              <!--end::Action=-->
            </tr>

          <?php endfor ?>
          </tbody>
          <!--end::Table body-->
        </table>
        <!--end::Table-->
      </div>
      <!--end::Card body-->
    </div>
    <!--end::Card-->
  </div>
  <!--end::Container-->
</div>
<!--end::Content-->

<?php require_once INCLUDES . 'inc_footer.php'; ?>
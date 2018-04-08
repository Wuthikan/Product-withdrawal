/** 
 * @author: ระบุชื่อ-นามสกุลของคุณที่นี่
 * @phone: ระบุหมายเลขโทรศัพท์ของคุณที่นี่
 * @email: ระบุอีเมลของคุณที่นี่
 */

$(document).ready(function (e) {
    var substringMatcher = function (strs) {
        return function findMatches(q, cb) {
            var matches, substringRegex;

            // an array that will be populated with substring matches
            matches = [];

            // regex used to determine if a string contains the substring `q`
            substrRegex = new RegExp(q, 'i');

            // iterate through the pool of strings and for any string that
            // contains the substring `q`, add it to the `matches` array
            $.each(strs, function (i, str) {
                if (substrRegex.test(str.name) && str.show) {
                    matches.push(str.name);
                }
            });

            cb(matches);
        };
    };

    function create_typeahead(selector, data) {
        return $(selector).typeahead({
            hint: true,
            highlight: true,
            minLength: 0,
        }, {
            name: 'data',
            limit: 100,
            source: function (query, process) {
                companies = [];
                map = {};
                substrRegex = new RegExp(query, 'i');
                $.each(data, function (i, company) {
                    if (substrRegex.test(company.name) && company.show) {
                        map[company.name] = company;
                        companies.push(company.name);
                    }
                });

                process(companies);
            }
        });
    }

    create_typeahead('input#search-company', data);

    $('input#search-company').bind('typeahead:select', function (ev, name) {
        $('#select-company').append(create_company_select(map[name]['id']));
        update_data_status(map[name]['id'], false);
    });

    $('input#search-company').bind('typeahead:close', function (ev, name) {
        $('#search-company').val('');
    });

    $('#select-company').on('click', 'button.company_id', function () {
        $(this).closest('.select-company').remove();
        update_data_status($(this).val(), true);
    });

    function update_data_status(id, status) {
        $.each(data, function (key, item) {
            if (id == item.id) {
                item.show = status;
            }
        });
        $('input#search-company').typeahead('destroy');
        create_typeahead('input#search-company', data);
    }

    function create_company_select(id) {
        var company = [
            '<div class="col-sm-6 col-xs-12 select-company">',
            '<input type="hidden" name="company_id[]" value="__company_id__">',
            '<div class="checklist-group">',
            '<div class="checklist-group-left">',
            '<button type="button" form="form-data" class="btn btn-link company_id" value="__company_id__">',
            '<span class="btn-label" style="padding-left:3px !important;">',
            '<i class="fa fa-trash-o"></i>',
            '</span>',
            '</button>',
            '</div>',
            '<div class="checklist-group-body">',
            '<label>__company_name__</label>',
            '<p>__company_desc__</p>',
            '</div>',
            '</div>',
            '</div>'
        ];

        var result = false;

        $.each(data, function (key, item) {
            if (id == item.id) {
                result = company.join('');
                result = result.replace('__company_id__', item.id);
                result = result.replace('__company_id__', item.id);
                result = result.replace('__company_name__', item.name);
                result = result.replace('__company_desc__', item.desc);
            }
        });

        return result;
    }
});
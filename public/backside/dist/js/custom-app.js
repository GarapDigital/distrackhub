$(document).ready(function () {
    // ==============================================================
    // This is for Show more show less word
    // ==============================================================
    var maximumWordsLength = 10;
    var element = $('td.word-limiter')
    var countLengthOfElement = element.html().split(' ').length

    if (countLengthOfElement > maximumWordsLength) {
        element.each(function (index, val) {
            var showMore = $('<p>').css('cursor', 'pointer').addClass('text-primary show-more').text('Show More')
            var showLess = $('<p>').css('cursor', 'pointer').addClass('text-primary show-less').text('Show Less')

            var fullText = val.innerText

            val.innerText = val.innerText.substr(0, 30)+'...'

            val.append(showMore[0])

            $(this).click(function (e) {

                var selectedElemClass = $(this).children().attr('class').split(' ')[1]

                if (selectedElemClass == 'show-more') {

                    val.innerText = fullText

                    val.append(showLess[0])

                } else if (selectedElemClass == 'show-less') {

                    val.innerText = fullText.substr(0, 30)+'...'

                    val.append(showMore[0])

                }
            })
        })
    }
})

$(document).ready(function () {
    // ==============================================================
    // This is for increase / decrease answers
    // ==============================================================
    if ( $('div.row.answer-section').length == 1 ) $('button#decrease').attr('disabled', 'disabled')

    $('#btn-actions-group > .btn-actions').click(function (e) {
        if ( $(this).attr('id') == "increase" ) {

            $('button#decrease').removeAttr('disabled')

            let index = $('div.row.answer-section').length
            let alphabet = String.fromCharCode( (index + 1) + 64 )
            let asmntType = $('input[name="asmnt_type"]').val()

            let formGroupHtml = '';

            if (asmntType == "score") {
                console.log('score')
                formGroupHtml = `
                <div class="row answer-section">
                    <div class="col-md-1">
                        <label class="form-label"># </label>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="Alphabet" name="alphabet[]" value="${alphabet}" style="cursor: not-allowed" readonly>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <label class="form-label">Answer <span class="text-danger">*</span> </label>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="Answer" name="answer[]" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Score <span class="text-danger">*</span> </label>
                        <div class="form-group mb-3">
                            <input type="number" min="1" class="form-control" placeholder="Score" name="score[]" required>
                        </div>
                    </div>
                </div>
                `

            } else if (asmntType == "corrections") {
                console.log('corrections')
                formGroupHtml = `
                <div class="row answer-section">
                    <div class="col-md-1">
                        <label class="form-label"># </label>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="Alphabet" name="alphabet[]" value="${alphabet}" style="cursor: not-allowed" readonly>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <label class="form-label">Answer <span class="text-danger">*</span> </label>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="Answer" name="answer[]" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Is Correct ? <span class="text-danger">*</span> </label>
                        <div class="form-group mb-3">
                            <select class="form-control" name="is_correct[]" required>
                                <option value="" selected hidden>Select The Corrections</option>
                                <option value="1">Yes, Correct Answer!</option>
                                <option value="0">No, It's Not Correct!</option>
                            </select>
                        </div>
                    </div>
                </div>
                `
            }

            $(formGroupHtml).insertBefore('#answer-section-divider')

            if (alphabet == "Y") $('button#increase').attr('disabled', 'disabled')

        } else if ( $(this).attr('id') == "decrease" ) {

            $('button#decrease').removeAttr('disabled')

            let index = $("div.row.answer-section").length;
            if( (index - 1) == 1 ) {
                $('button#decrease').attr('disabled', 'disabled')
            } else if ( index == 25 ) {
                $('button#increase').removeAttr('disabled')
            }
            console.log(index)
            $("div.row.answer-section").last().remove()

        }
    })

})


$(document).ready(function () {
    // ==============================================================
    // This is for Show Image Input type file
    // ==============================================================

    $('input[type="file"].input-image-type').change(function (e) {
        let reader = new FileReader()
        reader.onload = function (e) {
            $('#show-image-from-input').css({
                'width':'233.33px',
                'height':'233.33px'
            }).attr('src', e.target.result)
        }

        reader.readAsDataURL(e.target.files[0])
    })

})





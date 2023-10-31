<?php

use DTSIslam\Lib\Url;

include __DIR__ . '/header.php';

?>

<div class="container-fluid">
    <div class="row align-items-center mb-3">
        <div class="col-md-2">
            <button class="btn btn-primary btn-sm btn-block startMerging">
                Start Merging
            </button>
        </div>
        <div class="col-md-10">
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
            </div>
        </div>
    </div>
    <div class="card card-body bg-dark text-light text-monospace log"></div>
</div>

<script>
    const baseUrl = '<?= Url::adminSection('/') ?>'

    class Merge {
        constructor() {
            this.topicCount = this.getTopicCount()
        }

        getTopicCount() {
            return fetch(`${baseUrl}topic/count`)
                .then(res => res.json())
                .then(res => res.data)
        }

        async doMerge() {
            const perBatch = 100
            const batch = Math.ceil((await this.topicCount) / perBatch)
            $('.progress-bar').css('width', '0.1%')
            for (let b = 1; b <= batch; b++) {
                this.log(`Run for batch ${b} of ${batch}`)
                const m = await fetch(`${baseUrl}topic/doMerge`, {
                    method: 'post',
                    body: JSON.stringify({
                        batch: b,
                        total: batch,
                        perbatch: perBatch
                    })
                })
                const r = await m.json()
                console.log(r)
                $('.progress-bar').css('width', ((b/batch)*100) + '%')
            }

            // finished
            $('.progress-bar').removeClass('progress-bar-animated').addClass('bg-success')
        }

        log(message) {
            const d = new Date;
            $('.log').append(`<div>${d.getFullYear()}-${d.getMonth()}-${d.getDate()} ${d.getHours()}:${d.getMinutes()}:${d.getSeconds()} > ${message}</div>`);
            if ($('.log').children().length > 10) $('.log').find('div:first').remove();
        }
    }

    (async () => {
        const merge = new Merge()
        merge.log(`Topic count: ${await merge.topicCount}`)

        const btnMerge = $('.startMerging')
        btnMerge.click(async () => {
            await merge.doMerge()
        })
    })()
</script>
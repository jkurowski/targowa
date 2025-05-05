@props([
    'place' => 'place',
    'time' => 'time'
])

<div class="maplegend-box maplegend-grey">
    <div class="box-icon-holder">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="46" viewBox="0 0 26 46" class="walk-icon">
            <g transform="translate(-7.168 -1.356)">
                <path d="M20.667,20.408l3.158,1.056a1.957,1.957,0,0,0,1.78-3.47l-4.75-2.629-2.966-4.576" transform="translate(5.911 5.167)" fill="none" stroke="#978c7d" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.3"/>
                <circle cx="4.747" cy="4.747" r="4.747" transform="translate(15.638 2.006)" fill="none" stroke="#978c7d" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.3"/>
                <path d="M14.737,20.272l-.337,3.99L8.663,32.347a2.05,2.05,0,0,0,2.963,2.823L17.4,28.547a8.422,8.422,0,0,0,1.651-2.9l1.139-3.614" transform="translate(0.198 10.745)" fill="none" stroke="#978c7d" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.3"/>
                <path d="M18.873,9h.815a4.4,4.4,0,0,1,4.4,4.4v7.846a3.762,3.762,0,0,0,1.1,2.66l3.039,3.039A8.141,8.141,0,0,1,30.413,30.9l2.038,8.983a2.146,2.146,0,0,1-2.121,2.469h0a2.146,2.146,0,0,1-2.069-1.576L25.133,32.2l-7.853-6.43a5.183,5.183,0,0,1-1.9-4.211l.234-6.027-2.8,2.268-.935,4.723a2.04,2.04,0,0,1-2.409,1.6h0a2.04,2.04,0,0,1-1.608-2.319L8.723,16.4a4.754,4.754,0,0,1,1.865-3.076l3.86-2.86A7.433,7.433,0,0,1,18.873,9Z" transform="translate(0 4.114)" fill="none" stroke="#978c7d" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.3"/>
            </g>
        </svg>
    </div>
    <span><strong>{{ $time }}</strong><span class="d-block">{{ strtoupper($place) }}</span></span>
</div>

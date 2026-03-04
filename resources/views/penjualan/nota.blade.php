<style>
    .invoice {
        margin: auto;
        width: 80mm;
        background: #FFF;
    }

    .huruf {
        font-size: 18px;
    }

    .huruf2 {
        font-size: 25px;
    }
</style>
{{-- <script>
    window.print();
</script> --}}







<div class="invoice">
    <br>
    <center>
        <img width="150" src="{{ asset('img') }}/kebab-yasmin-new-2025.png" alt="">

    </center>
    <p align="center" class="huruf">{{ $dt_invoice->cabang->nama }}</p>
    <p align="center" style="margin-top: -10px;" class="huruf">Surganya Ngebab!</p>
    <p style=" margin-top: -10px;" align="center" class="huruf">0813-4103-733</p>
    {{-- <p style=" margin-top: -10px;" align="center" class="huruf">{{ $dt_invoice->cabang->alamat }}</p> --}}
    {{-- <p style=" margin-top: -10px;" align="center" class="huruf">Kota Banjarmasin</p> --}}


    <table width="100%">
        {{-- <tr>
        <td width="40%" class="huruf">No Invoice</td>
      <td style="text-align: left; " class="huruf">: {{ $dt_invoice->no_invoice }}</td>
    </tr> --}}
        <tr>
            <td width="40%" class="huruf">Waktu</td>
            <td style="text-align: left; " class="huruf">: {{ date('d M Y', strtotime($dt_invoice->tgl)) }}
                {{ date('H:i', strtotime($dt_invoice->created_at)) }}</td>
        </tr>
        <!-- <tr>
        <td width="40%" class="huruf">Order</td>
      <td style="text-align: left; " class="huruf">: Kasir Orchard</td>
    </tr> -->
        <tr>
            <td width="40%" class="huruf">Kasir</td>
            <td style="text-align: left; " class="huruf">:
                @if ($dt_invoice->penjualanGaji)
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($dt_invoice->penjualanGaji as $kry)
                        @if ($i > 1)
                            ,
                        @endif
                        {{ $kry->karyawan->nama }}
                        @php
                            $i++;
                        @endphp
                    @endforeach
                @endif

            </td>
        </tr>

        <tr>
            <td width="40%" class="huruf">Costumer</td>
            <td style="text-align: left; " class="huruf">: {{ $dt_invoice->nm_costumer }}</td>
        </tr>

        <tr>
            <td width="40%" class="huruf">Jenis Order</td>
            <td style="text-align: left; " class="huruf">:
                {{ $dt_invoice->delivery ? $dt_invoice->delivery->delivery : '' }}</td>
        </tr>

        <tr>
            <td width="40%" class="huruf">Antrian</td>
            <td style="text-align: left; " class="huruf">: {{ $dt_invoice->urutan }}</td>
        </tr>

    </table>

    <hr>
    @php
        $total_produk = 0;
        $qty_produk = 0;
    @endphp
    <table width="100%">
        @foreach ($dt_invoice->penjualan as $d)
            <tr class="huruf" style="margin-bottom: 2px;">
                <td width="10%">{{ $d->qty }}</td>
                <td width="70%">{{ ucwords($d->getMenu->nm_produk) }}
                    @if ($d->penjualanVarian)
                        @foreach ($d->penjualanVarian as $vr)
                            + {{ $vr->getVarian->nm_varian }}
                        @endforeach
                    @endif
                    <br>
                    {{ $d->catatan }}
                </td>

                <td width="20%" style="text-align: right;">
                    <strong>{{ number_format($d->harga * $d->qty + $d->total_varian, 0) }}</strong>
                </td>
            </tr>
            @php
                $total_produk += $d->harga * $d->qty + $d->total_varian;
                $qty_produk += $d->qty;
            @endphp
        @endforeach



    </table>
    <hr>
    <table width="100%">
        {{-- <?php if($invoice->diskon !=0): ?>
        <tr class="huruf">
            <td>Diskon</td>
            <td style="text-align: right;"><?= number_format($invoice->diskon, 0) ?></td>
        </tr>
      <?php endif; ?> --}}

        {{-- <?php if($invoice->dp !=0): ?>
        <tr class="huruf">
            <td>DP</td>
            <td style="text-align: right;"><?= number_format($invoice->dp, 0) ?></td>
        </tr>
        <?php endif; ?> --}}

        {{-- <?php if($invoice->bca_kredit !=0): ?>
        <tr class="huruf">
            <td>Kredit BCA</td>
            <td style="text-align: right;"><?= number_format($invoice->bca_kredit, 0) ?></td>
        </tr>
        <?php endif; ?>
        <?php if($invoice->bca_debit !=0): ?>
        <tr class="huruf">
            <td>Debit BCA</td>
            <td style="text-align: right;"><?= number_format($invoice->bca_debit, 0) ?></td>
        </tr>
        <?php endif; ?>
        <?php if($invoice->mandiri_kredit !=0): ?>
        <tr class="huruf">
            <td>Kredit Mandiri</td>
            <td style="text-align: right;"><?= number_format($invoice->mandiri_kredit, 0) ?></td>
        </tr>
        <?php endif; ?>
        <?php if($invoice->mandiri_debit !=0): ?>
        <tr class="huruf">
            <td>Debit Mandiri</td>
            <td style="text-align: right;"><?= number_format($invoice->mandiri_debit, 0) ?></td>
        </tr>
        <?php endif; ?>
        <?php if($invoice->cash !=0) : ?>
        <tr class="huruf">
            <td>Cash</td>
            <td style="text-align: right;"><?= number_format($invoice->cash, 0) ?></td>
        </tr>
        <?php endif; ?> --}}
        <tr class="huruf">
            <td><strong>Subtotal {{ $qty_produk }} Produk</strong></td>
            <td style="text-align: right;"><strong>{{ number_format($total_produk, 0) }}</strong></td>
        </tr>
        @if ($dt_invoice->diskon > 0)
            <tr class="huruf">
                <td><strong>Diskon</strong></td>
                <td style="text-align: right;"><strong>{{ number_format($dt_invoice->diskon, 0) }}</strong></td>
            </tr>
            <tr class="huruf">
                <td><strong>Grand Total</strong></td>
                <td style="text-align: right;">
                    <strong>{{ number_format($total_produk - $dt_invoice->diskon, 0) }}</strong>
                </td>
            </tr>
        @endif

        <tr class="huruf">
            <td>Total Pembayaran</td>
            <td style="text-align: right;">{{ number_format($dt_invoice->dibayar, 0) }}</td>
        </tr>
        <tr class="huruf">
            <td>Kembalian</td>
            <td style="text-align: right;">
                {{ number_format($dt_invoice->dibayar - ($total_produk - $dt_invoice->diskon), 0) }}</td>
        </tr>
    </table>
    <hr>
    <hr>
    <p class="huruf" align="center">Terimakasih</p>
    {{-- <p class="huruf" align="center" style="margin-top: -10px;">Call 081151-88778</p> --}}
    <p class="huruf" align="center">Instagram : kebabyasmin.id</p>
    <p class="huruf" align="center">Youtube : kebabyasmin</p>
    <p class="huruf" align="center">Terbayar</p>

    <p class="huruf" align="center" style="margin-top: -10px;"><-------- <?= date('d M Y h:i') ?> --------></p>

</div>

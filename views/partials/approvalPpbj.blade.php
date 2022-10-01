                            @if ($data->total_biaya <= 2000000)
                            <tr>
                                <td style="width: 230px;" class="text-uppercase"><strong>CHIEF UNIT TERKAIT</strong></td>
                                <td class="text-uppercase">{{ $data->ppbj_approval->chief }}</td>
                                @if ($data->ppbj_approval->tgl1 == NULL)
                                <td class="text-center text-uppercase">-</td>
                                @else
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->tgl1 }}</td>
                                @endif
                                @if ($data->ppbj_approval->alasan1 == NULL)
                                <td class="text-center text-uppercase">-</td>
                                @else
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->alasan1 }}</td>
                                @endif
                                <td class="text-center text-uppercase"><span class="badge bg-label-success fs-6 me-1">{{ $data->ppbj_approval->status1 }}</span></td>
                            </tr>
                            @elseif ($data->total_biaya <= 5000000)
                            <tr>
                                <td style="width: 230px;" class="text-uppercase"><strong>CHIEF UNIT TERKAIT</strong></td>
                                <td class="text-uppercase">{{ $data->ppbj_approval->chief }}</td>
                                @if ($data->ppbj_approval->tgl1 == NULL)
                                <td class="text-center text-uppercase">-</td>
                                @else
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->tgl1 }}</td>
                                @endif
                                @if ($data->ppbj_approval->alasan1 == NULL)
                                <td class="text-center text-uppercase">-</td>
                                @else
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->alasan1 }}</td>
                                @endif
                                <td class="text-center text-uppercase"><span class="badge bg-label-success fs-6 me-1">{{ $data->ppbj_approval->status1 }}</span></td>
                            </tr>
                            <tr>
                                <td style="width: 230px;" class="text-uppercase"><strong>MANAGER UNIT TERKAIT</strong></td>
                                <td class="text-uppercase">{{ $data->ppbj_approval->manager }}</td>
                                @if ($data->ppbj_approval->tgl2 == NULL)
                                <td class="text-center text-uppercase">-</td>
                                @else
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->tgl2 }}</td>
                                @endif
                                @if ($data->ppbj_approval->alasan2 == NULL)
                                <td class="text-center text-uppercase">-</td>
                                @else
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->alasan2 }}</td>
                                @endif
                                <td class="text-center text-uppercase"><span class="badge bg-label-success fs-6 me-1">{{ $data->ppbj_approval->status2 }}</span></td>
                            </tr>
                            @elseif ($data->total_biaya <= 10000000)
                            <tr>
                                <td style="width: 230px;" class="text-uppercase"><strong>CHIEF UNIT TERKAIT</strong></td>
                                <td class="text-uppercase">{{ $data->ppbj_approval->chief }}</td>
                                @if ($data->ppbj_approval->tgl1 == NULL)
                                <td class="text-center text-uppercase">-</td>
                                @else
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->tgl1 }}</td>
                                @endif
                                @if ($data->ppbj_approval->alasan1 == NULL)
                                <td class="text-center text-uppercase">-</td>
                                @else
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->alasan1 }}</td>
                                @endif
                                <td class="text-center text-uppercase"><span class="badge bg-label-success fs-6 me-1">{{ $data->ppbj_approval->status1 }}</span></td>
                            </tr>
                            <tr>
                                <td style="width: 230px;" class="text-uppercase"><strong>MANAGER UNIT TERKAIT</strong></td>
                                <td class="text-uppercase">{{ $data->ppbj_approval->manager }}</td>
                                @if ($data->ppbj_approval->tgl2 == NULL)
                                <td class="text-center text-uppercase">-</td>
                                @else
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->tgl2 }}</td>
                                @endif
                                @if ($data->ppbj_approval->alasan2 == NULL)
                                <td class="text-center text-uppercase">-</td>
                                @else
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->alasan2 }}</td>
                                @endif
                                <td class="text-center text-uppercase"><span class="badge bg-label-success fs-6 me-1">{{ $data->ppbj_approval->status2 }}</span></td>
                            </tr>
                            <tr>
                                <td style="width: 230px;" class="text-uppercase"><strong>SENIOR MANAGER</strong></td>
                                <td class="text-uppercase">{{ $data->ppbj_approval->senior_manager }}</td>
                                @if ($data->ppbj_approval->tgl3 == NULL)
                                <td class="text-center text-uppercase">-</td>
                                @else
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->tgl3 }}</td>
                                @endif
                                @if ($data->ppbj_approval->alasan3 == NULL)
                                <td class="text-center text-uppercase">-</td>
                                @else
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->alasan3 }}</td>
                                @endif
                                <td class="text-center text-uppercase"><span class="badge bg-label-success fs-6 me-1">{{ $data->ppbj_approval->status3 }}</span></td>
                            </tr>
                            @else
                            <tr>
                                <td style="width: 230px;" class="text-uppercase"><strong>CHIEF UNIT TERKAIT</strong></td>
                                <td class="text-uppercase">{{ $data->ppbj_approval->chief }}</td>
                                @if ($data->ppbj_approval->tgl1 == NULL)
                                <td class="text-center text-uppercase">-</td>
                                @else
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->tgl1 }}</td>
                                @endif
                                @if ($data->ppbj_approval->alasan1 == NULL)
                                <td class="text-center text-uppercase">-</td>
                                @else
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->alasan1 }}</td>
                                @endif
                                <td class="text-center text-uppercase"><span class="badge bg-label-success fs-6 me-1">{{ $data->ppbj_approval->status1 }}</span></td>
                            </tr>
                            <tr>
                                <td style="width: 230px;" class="text-uppercase"><strong>MANAGER UNIT TERKAIT</strong></td>
                                <td class="text-uppercase">{{ $data->ppbj_approval->manager }}</td>
                                @if ($data->ppbj_approval->tgl2 == NULL)
                                <td class="text-center text-uppercase">-</td>
                                @else
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->tgl2 }}</td>
                                @endif
                                @if ($data->ppbj_approval->alasan2 == NULL)
                                <td class="text-center text-uppercase">-</td>
                                @else
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->alasan2 }}</td>
                                @endif
                                <td class="text-center text-uppercase"><span class="badge bg-label-success fs-6 me-1">{{ $data->ppbj_approval->status2 }}</span></td>
                            </tr>
                            <tr>
                                <td style="width: 230px;" class="text-uppercase"><strong>SENIOR MANAGER</strong></td>
                                <td class="text-uppercase">{{ $data->ppbj_approval->senior_manager }}</td>
                                @if ($data->ppbj_approval->tgl3 == NULL)
                                <td class="text-center text-uppercase">-</td>
                                @else
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->tgl3 }}</td>
                                @endif
                                @if ($data->ppbj_approval->alasan3 == NULL)
                                <td class="text-center text-uppercase">-</td>
                                @else
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->alasan3 }}</td>
                                @endif
                                <td class="text-center text-uppercase"><span class="badge bg-label-success fs-6 me-1">{{ $data->ppbj_approval->status3 }}</span></td>
                            </tr>
                            <tr>
                                <td style="width: 230px;" class="text-uppercase"><strong>DIREKTUR</strong></td>
                                <td class="text-uppercase">{{ $data->ppbj_approval->direktur }}</td>
                                @if ($data->ppbj_approval->tgl4 == NULL)
                                <td class="text-center text-uppercase">-</td>
                                @else
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->tgl4 }}</td>
                                @endif
                                @if ($data->ppbj_approval->alasan4 == NULL)
                                <td class="text-center text-uppercase">-</td>
                                @else
                                <td class="text-center text-uppercase">{{ $data->ppbj_approval->alasan4 }}</td>
                                @endif
                                <td class="text-center text-uppercase"><span class="badge bg-label-success fs-6 me-1">{{ $data->ppbj_approval->status4 }}</span></td>
                            </tr>
                            @endif
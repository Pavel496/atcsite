<?php

namespace App\Http\Controllers\Admin;

use App\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePdfsRequest;
use App\Http\Requests\Admin\UpdatePdfsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class PdfsController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Pdf.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('pdf_access')) {
            return abort(401);
        }
        if ($filterBy = Input::get('filter')) {
            if ($filterBy == 'all') {
                Session::put('Pdf.filter', 'all');
            } elseif ($filterBy == 'my') {
                Session::put('Pdf.filter', 'my');
            }
        }

        if (request('show_deleted') == 1) {
            if (! Gate::allows('pdf_delete')) {
                return abort(401);
            }
            $pdfs = Pdf::onlyTrashed()->get();
        } else {
            $pdfs = Pdf::all();
        }

        return view('admin.pdfs.index', compact('pdfs'));
    }

    /**
     * Show the form for creating new Pdf.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('pdf_create')) {
            return abort(401);
        }
        
        $created_bies = \App\User::get()->pluck('name', 'id')->prepend(trans('global.app_please_select'), '');

        return view('admin.pdfs.create', compact('created_bies'));
    }

    /**
     * Store a newly created Pdf in storage.
     *
     * @param  \App\Http\Requests\StorePdfsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePdfsRequest $request)
    {
        if (! Gate::allows('pdf_create')) {
            return abort(401);
        }
        $pdfname = $request->file('file')->getClientOriginalName();
        $request = $this->saveFiles($request);
        $request['name'] = $pdfname;
        //dd($request->all());
        $pdf = Pdf::create($request->all());



        return redirect()->route('admin.pdfs.index');
    }


    /**
     * Show the form for editing Pdf.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('pdf_edit')) {
            return abort(401);
        }
        
        $created_bies = \App\User::get()->pluck('name', 'id')->prepend(trans('global.app_please_select'), '');

        $pdf = Pdf::findOrFail($id);

        return view('admin.pdfs.edit', compact('pdf', 'created_bies'));
    }

    /**
     * Update Pdf in storage.
     *
     * @param  \App\Http\Requests\UpdatePdfsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePdfsRequest $request, $id)
    {
        if (! Gate::allows('pdf_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $pdf = Pdf::findOrFail($id);
        $pdf->update($request->all());



        return redirect()->route('admin.pdfs.index');
    }


    /**
     * Display Pdf.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('pdf_view')) {
            return abort(401);
        }
        $pdf = Pdf::findOrFail($id);

        return view('admin.pdfs.show', compact('pdf'));
    }


    /**
     * Remove Pdf from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('pdf_delete')) {
            return abort(401);
        }
        $pdf = Pdf::findOrFail($id);
        $pdf->delete();

        return redirect()->route('admin.pdfs.index');
    }

    /**
     * Delete all selected Pdf at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('pdf_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Pdf::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Pdf from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('pdf_delete')) {
            return abort(401);
        }
        $pdf = Pdf::onlyTrashed()->findOrFail($id);
        $pdf->restore();

        return redirect()->route('admin.pdfs.index');
    }

    /**
     * Permanently delete Pdf from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('pdf_delete')) {
            return abort(401);
        }
        $pdf = Pdf::onlyTrashed()->findOrFail($id);
        unlink(public_path() . '/' . $pdf->file);
        $pdf->forceDelete();

        return redirect()->route('admin.pdfs.index');
    }
}
/*
    public function destroy($id)
    {
        //

        $post = Post::findOrFail($id);

        unlink(public_path() . $post->photo->file);

        $post->delete();

        return redirect('/admin/posts');


    }
*/

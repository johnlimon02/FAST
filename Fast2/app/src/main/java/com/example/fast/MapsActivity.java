package com.example.fast;

import androidx.annotation.NonNull;
import androidx.fragment.app.FragmentActivity;

import android.Manifest;
import android.annotation.SuppressLint;
import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.provider.Settings;
import android.telecom.Call;
import android.widget.Toast;

import com.google.android.gms.maps.CameraUpdateFactory;
import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.OnMapReadyCallback;
import com.google.android.gms.maps.SupportMapFragment;
import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.Marker;
import com.google.android.gms.maps.model.MarkerOptions;
import com.example.fast.databinding.ActivityMapsBinding;
import com.karumi.dexter.Dexter;
import com.karumi.dexter.PermissionToken;
import com.karumi.dexter.listener.PermissionDeniedResponse;
import com.karumi.dexter.listener.PermissionGrantedResponse;
import com.karumi.dexter.listener.PermissionRequest;
import com.karumi.dexter.listener.single.PermissionListener;

import java.util.ArrayList;

public class MapsActivity extends FragmentActivity implements OnMapReadyCallback {

    private GoogleMap mMap;
    private ActivityMapsBinding binding;
//    LatLng phil = new LatLng(14.039665890558496, 120.65201635486828);

    ArrayList <LatLng>arrayList= new ArrayList<LatLng>();
    LatLng TRES_MARIENELLES_MOTOR_PARTS_AND_ACCESSORIES = new LatLng(14.073262944801032, 120.63152007723276);
    LatLng KLEAN_TONE_CARWASH = new LatLng(14.074844184175829, 120.63575639543032);
    LatLng Lian = new LatLng(14.039665890558496, 120.65201635486828);

    ArrayList<String> title =new ArrayList<>();




    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

        binding = ActivityMapsBinding.inflate(getLayoutInflater());
        setContentView(binding.getRoot());

        // Obtain the SupportMapFragment and get notified when the map is ready to be used.
        SupportMapFragment mapFragment = (SupportMapFragment) getSupportFragmentManager()
                .findFragmentById(R.id.map);
        mapFragment.getMapAsync(this);
        checkpermission();

        arrayList.add(TRES_MARIENELLES_MOTOR_PARTS_AND_ACCESSORIES);
        arrayList.add(KLEAN_TONE_CARWASH);
        arrayList.add(Lian);

        title.add("TRES_MARIENELLES_MOTOR_PARTS_AND_ACCESSORIES");
        title.add("KLEAN_TONE_CARWASH");
        title.add("Lian");

    }
    private void checkpermission(){
        Dexter.withContext(this).withPermission(Manifest.permission.ACCESS_FINE_LOCATION).withListener(new PermissionListener() {
            @Override
            public void onPermissionGranted(PermissionGrantedResponse permissionGrantedResponse) {
                Toast.makeText(MapsActivity.this, "Permission Granted",Toast.LENGTH_SHORT).show();
            }

            @Override
            public void onPermissionDenied(PermissionDeniedResponse permissionDeniedResponse) {
                Intent intent = new Intent();
                intent.setAction(Settings.ACTION_APPLICATION_DETAILS_SETTINGS);
                Uri uri = Uri.fromParts("package",getPackageName(),"");
                intent.setData(uri);
                startActivity(intent);
            }

            @Override
            public void onPermissionRationaleShouldBeShown(PermissionRequest permissionRequest, PermissionToken permissionToken) {
                permissionToken.continuePermissionRequest();
            }
        }).check();
    }

    /**
     * Manipulates the map once available.
     * This callback is triggered when the map is ready to be used.
     * This is where we can add markers or lines, add listeners or move the camera. In this case,
     * we just add a marker near Sydney, Australia.
     * If Google Play services is not installed on the device, the user will be prompted to install
     * it inside the SupportMapFragment. This method will only be triggered once the user has
     * installed Google Play services and returned to the app.
     */

    @SuppressLint("MissingPermission")
    @Override
    public void onMapReady(GoogleMap googleMap) {
        mMap = googleMap;

        for(int i =0;i<arrayList.size();i++){

            for (int j=0;j<title.size();j++){
                mMap.addMarker(new MarkerOptions().position(arrayList.get(i)).title(String.valueOf(title.get(i))));
            }
            mMap.moveCamera(CameraUpdateFactory.newLatLng(arrayList.get(i)));
        }

       mMap.setOnMarkerClickListener(new GoogleMap.OnMarkerClickListener() {
           @Override
           public boolean onMarkerClick(@NonNull Marker marker) {
               String markertitle = marker.getTitle();

               Intent i = new Intent(MapsActivity.this, Details.class);
               i.putExtra("title",markertitle);
               startActivity(i);

               return false;
           }
       });
        // Add a marker in Sydney and move the camera
//        LatLng phil = new LatLng(14.039665890558496, 120.65201635486828);
//        LatLng tres = new LatLng(14.073262944801032, 120.63152007723276);
//        mMap.addMarker(new MarkerOptions().position(phil).title("7/11"));
//        mMap.addMarker(new MarkerOptions().position(tres).title("Tres"));
//        mMap.moveCamera(CameraUpdateFactory.newLatLng(phil));
        mMap.getUiSettings().setZoomControlsEnabled(true);
        mMap.setMyLocationEnabled(true);

    }
}
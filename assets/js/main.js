// Change form input of Post creation form
$(document).ready(function() {
    $(document).on('change', '#PostSeekingSelect', function() {
        var formdata = this.value;
        switch(formdata) {
                
            case 'Mess':
                $("#PostTotalRoom").css('display','block');
                $("#PostFloorSize").css('display','none');
                $("#PostBedRooms").css('display','block');
                $("#PostDinning").css('display','block');
                $("#PostBalcony").css('display','block');
                $("#PostGodown").css('display','none');
                $("#PostSeekingGender").css('display','block');

                break;

            case 'Hostel':
                $("#PostTotalRoom").css('display', 'block');
                $("#PostBedRooms").css('display', 'block');
                $("#PostDinning").css('display', 'block');
                $("#PostBalcony").css('display', 'block');
                $("#PostSeekingGender").css('display', 'block');

                $("#PostFloorSize").css('display', 'none');
                $("#PostGodown").css('display', 'none');
                
                break;    
                
            case 'Office':
                $("#PostTotalRoom").css('display', 'block');
                $("#PostBedRooms").css('display', 'none');
                $("#PostDinning").css('display', 'none');
                $("#PostBalcony").css('display', 'block');
                $("#PostFloorSize").css('display', 'block');
                $("#PostSeekingGender").css('display', 'none');
                $("#PostGodown").css('display', 'none');
                
                break;

            case 'Showroom':
                $("#PostTotalRoom").css('display', 'block');
                $("#PostBedRooms").css('display', 'none');
                $("#PostDinning").css('display', 'none');
                $("#PostBalcony").css('display', 'none');
                $("#PostFloorSize").css('display', 'block');
                $("#PostSeekingGender").css('display', 'none');
                $("#PostGodown").css('display', 'block');

                break;
            
            case 'Shop':
                $("#PostTotalRoom").css('display', 'none');
                $("#PostBedRooms").css('display', 'none');
                $("#PostDinning").css('display', 'none');
                $("#PostBalcony").css('display', 'none');
                $("#PostFloorSize").css('display', 'block');
                $("#PostSeekingGender").css('display', 'none');
                $("#PostGodown").css('display', 'block');

                break;

            case 'Family':
                $("#PostTotalRoom").css('display', 'block');
                $("#PostBedRooms").css('display', 'block');
                $("#PostDinning").css('display', 'block');
                $("#PostBalcony").css('display', 'block');
                $("#PostFloorSize").css('display', 'none');
                $("#PostSeekingGender").css('display', 'none');
                $("#PostGodown").css('display', 'none');

                break;
            
            default:
                $("#PostTotalRoom").css('display', 'block');
                $("#PostBedRooms").css('display', 'block');
                $("#PostDinning").css('display', 'block');
                $("#PostBalcony").css('display', 'block');
                $("#PostFloorSize").css('display', 'none');
                $("#PostSeekingGender").css('display', 'none');
                $("#PostGodown").css('display', 'none');
                    
        }
    });
});


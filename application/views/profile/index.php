<?php
defined('BASEPATH') or exit('No direct script access allowed');

$user_name = isset($current_user['name']) ? $current_user['name'] : 'Muhammad Raihan';
$user_email = isset($current_user['email']) ? $current_user['email'] : 'raihan.student@stmi.ac.id';
?>

<div class="profile-page-wrapper" style="box-sizing: border-box; display: flex; flex-direction: column; gap: 20px; width: 100%; max-width: var(--container-max-app, 1440px); margin: 0 auto;">

	<!-- Profile Header Row matching design-reference/profile-user.html -->
	<div data-pencil-name="Profile Header Row" style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; width: 100%;">
		<div data-pencil-name="Title Column" style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 4px; height: fit-content; justify-content: flex-start; width: fit-content;">
			<div data-pencil-name="Main Title" style="box-sizing: border-box; color: #192a3d; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; font-size: 22px; font-style: normal; font-weight: 800; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;">
				Profil Pengguna &amp; Keamanan Akun
			</div>
			<div data-pencil-name="Main Subtitle" style="box-sizing: border-box; color: #64748b; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; font-size: 13px; font-style: normal; font-weight: 500; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;">
				Kelola informasi data diri, foto profil, dan kredensial akun peserta pembelajaran.
			</div>
		</div>
	</div>

	<!-- Profile Main 2-Col Grid matching design-reference/profile-user.html -->
	<div class="profile-main-grid" data-pencil-name="Profile Main 2-Col Grid" style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 24px; height: fit-content; justify-content: flex-start; width: 100%;">

		<!-- Left Column Profile (376px) -->
		<div class="profile-left-col" data-pencil-name="Left Column Profile" style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 16px; height: fit-content; justify-content: flex-start; width: 376px;">
			
			<div data-pencil-name="Profile Card Avatar and Identity" style="align-items: center; background-color: #ffffff; border-radius: 12px; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 16px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 22px 20px; width: 100%;">
				
				<!-- Avatar Container -->
				<div id="avatarContainer" data-pencil-name="Avatar Container" style="align-items: center; background-color: #2872fa; border-radius: 48px; box-shadow: 0px 4px 12px #2872fa33; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 96px; justify-content: center; width: 96px; position: relative; overflow: hidden;">
					<div id="avatarInitials" data-pencil-name="Avatar Initials" style="box-sizing: border-box; color: #ffffff; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; font-size: 32px; font-style: normal; font-weight: 800; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;">
						MR
					</div>
					<img id="avatarImageElement" src="" alt="Avatar" style="display: none; width: 100%; height: 100%; object-fit: cover;">
				</div>

				<!-- User Text Stack -->
				<div data-pencil-name="User Text Stack" style="align-items: center; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 4px; height: fit-content; justify-content: flex-start; width: fit-content;">
					<div id="displayNameLabel" data-pencil-name="User Full Name" style="box-sizing: border-box; color: #192a3d; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; font-size: 17px; font-style: normal; font-weight: 800; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;">
						<?= e($user_name); ?>
					</div>
				</div>

				<!-- Photo Action Buttons Row -->
				<div data-pencil-name="Photo Action Buttons Row" style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 8px; height: fit-content; justify-content: center; width: 100%;">
					<input type="file" id="profilePhotoInput" accept="image/png, image/jpeg, image/webp" style="display: none;">
					
					<button type="button" id="uploadPhotoBtn" data-pencil-name="Upload Photo Button" style="align-items: center; background-color: #2872fa; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 6px; height: fit-content; justify-content: flex-start; padding: 7px 14px; width: fit-content; border: none; cursor: pointer;">
						<?= icon('upload-simple', 'icon-xs'); ?>
						<span data-pencil-name="Upload Text" style="box-sizing: border-box; color: #ffffff; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;">
							Unggah Foto Baru
						</span>
					</button>

					<button type="button" id="deletePhotoBtn" data-pencil-name="Delete Photo Button" style="align-items: center; background-color: #ffffff; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 6px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; border: none; padding: 7px 12px; width: fit-content; cursor: pointer;">
						<?= icon('trash', 'icon-xs'); ?>
						<span data-pencil-name="Delete Text" style="box-sizing: border-box; color: #dc2626; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;">
							Hapus
						</span>
					</button>
				</div>

				<div data-pencil-name="Photo Format Hint" style="box-sizing: border-box; color: #94a3b8; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; font-size: 10px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;">
					Format JPG, PNG, atau WEBP. Maks. 2 MB.
				</div>

				<div data-pencil-name="Card Divider 1" style="align-items: flex-start; background-color: #f1f5f9; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 1px; justify-content: flex-start; width: 100%;"></div>

			</div>
		</div>

		<!-- Right Column Forms (716px) -->
		<div class="profile-right-col" data-pencil-name="Right Column Forms" style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 16px; height: fit-content; justify-content: flex-start; flex: 1; max-width: 716px;">
			
			<!-- Profile Form Data Diri Card -->
			<div data-pencil-name="Profile Form Data Diri Card" style="align-items: flex-start; background-color: #ffffff; border-radius: 12px; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 14px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 20px 24px; width: 100%;">
				
				<div data-pencil-name="Card 3 Header" style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 8px; height: fit-content; justify-content: flex-start; width: fit-content;">
					<?= icon('user', 'icon-md'); ?>
					<div data-pencil-name="Card 3 Title" style="box-sizing: border-box; color: #192a3d; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; font-size: 15px; font-style: normal; font-weight: 800; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;">
						Informasi Data Diri Peserta
					</div>
				</div>

				<!-- Form Group Name -->
				<div data-pencil-name="Form Group Name" style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 4px; height: fit-content; justify-content: flex-start; width: 100%;">
					<label data-pencil-name="Label Name" for="fullNameInput" style="box-sizing: border-box; color: #344054; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;">
						Nama Lengkap Peserta (Tercetak di Sertifikat Kelulusan) *
					</label>
					<div data-pencil-name="Input Box Name" style="align-items: center; background-color: #ffffff; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 42px; justify-content: space-between; outline-offset: -0.75px; outline: 1.5px solid #2872fa; padding: 0px 14px; width: 100%;">
						<input type="text" id="fullNameInput" value="<?= e($user_name); ?>" style="box-sizing: border-box; color: #192a3d; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; font-size: 13px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; border: none; outline: none; background: transparent; width: 100%; padding: 0;">
					</div>
				</div>

				<!-- Form Group Email -->
				<div data-pencil-name="Form Group Email" style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 4px; height: fit-content; justify-content: flex-start; width: 100%;">
					<label data-pencil-name="Label Email" for="emailInput" style="box-sizing: border-box; color: #344054; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;">
						Alamat Email Akun *
					</label>
					<div data-pencil-name="Input Box Email" style="align-items: center; background-color: #ffffff; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 42px; justify-content: space-between; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 0px 14px; width: 100%;">
						<input type="email" id="emailInput" value="<?= e($user_email); ?>" style="box-sizing: border-box; color: #192a3d; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; font-size: 13px; font-style: normal; font-weight: 500; letter-spacing: 0px; line-height: normal; text-align: left; border: none; outline: none; background: transparent; width: 100%; padding: 0;">
					</div>
				</div>

				<!-- Two Column Extra Fields -->
				<div class="profile-two-col-fields" data-pencil-name="Two Column Extra Fields" style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 16px; height: fit-content; justify-content: flex-start; width: 100%;">
					<div class="profile-half-col" data-pencil-name="Col Phone" style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 4px; height: fit-content; justify-content: flex-start; width: 100%;">
						<label data-pencil-name="Label Phone" for="phoneInput" style="box-sizing: border-box; color: #344054; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;">
							Nomor WhatsApp / HP
						</label>
						<div data-pencil-name="Input Box Phone" style="align-items: center; background-color: #ffffff; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 42px; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 0px 14px; width: 100%;">
							<input type="text" id="phoneInput" value="+62 812–3456–7890" style="box-sizing: border-box; color: #192a3d; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; font-size: 13px; font-style: normal; font-weight: 500; letter-spacing: 0px; line-height: normal; text-align: left; border: none; outline: none; background: transparent; width: 100%; padding: 0;">
						</div>
					</div>
				</div>

			</div>

			<!-- Profile Password Security Card -->
			<div data-pencil-name="Profile Password Security Card" style="align-items: flex-start; background-color: #ffffff; border-radius: 12px; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 14px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 20px 24px; width: 100%;">
				
				<div data-pencil-name="Card 4 Header" style="align-items: center; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 8px; height: fit-content; justify-content: flex-start; width: fit-content;">
					<?= icon('shield-check', 'icon-md'); ?>
					<div data-pencil-name="Card 4 Title" style="box-sizing: border-box; color: #192a3d; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; font-size: 15px; font-style: normal; font-weight: 800; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;">
						Keamanan Sandi Akun
					</div>
				</div>

				<!-- Form Group Old Pass -->
				<div data-pencil-name="Form Group Old Pass" style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 4px; height: fit-content; justify-content: flex-start; width: 100%;">
					<label data-pencil-name="Label Old Pass" for="oldPasswordInput" style="box-sizing: border-box; color: #344054; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;">
						Kata Sandi Saat Ini
					</label>
					<div data-pencil-name="Input Box Old Pass" style="align-items: center; background-color: #ffffff; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 42px; justify-content: space-between; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 0px 14px; width: 100%;">
						<input type="password" id="oldPasswordInput" value="supersecretpassword123" style="box-sizing: border-box; color: #64748b; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; font-size: 13px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: normal; text-align: left; border: none; outline: none; background: transparent; width: 100%; padding: 0;">
						<button type="button" id="toggleOldPassBtn" aria-label="Lihat kata sandi" style="background: none; border: none; cursor: pointer; color: #94a3b8; display: flex; padding: 0; align-items: center;">
							<?= icon('eye', 'icon-sm'); ?>
						</button>
					</div>
				</div>

				<!-- Two Column Password Row -->
				<div class="profile-two-col-password" data-pencil-name="Two Column Password Row" style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 16px; height: fit-content; justify-content: flex-start; width: 100%;">
					<div class="profile-half-col" data-pencil-name="Col New Pass" style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 4px; height: fit-content; justify-content: flex-start; width: 100%; flex: 1;">
						<label data-pencil-name="Label New Pass" for="newPasswordInput" style="box-sizing: border-box; color: #344054; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;">
							Kata Sandi Baru
						</label>
						<div data-pencil-name="Input Box New Pass" style="align-items: center; background-color: #ffffff; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 42px; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 0px 14px; width: 100%;">
							<input type="password" id="newPasswordInput" placeholder="Minimal 8 karakter unik" style="box-sizing: border-box; color: #192a3d; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: normal; text-align: left; border: none; outline: none; background: transparent; width: 100%; padding: 0;">
						</div>
					</div>

					<div class="profile-half-col" data-pencil-name="Col Confirm Pass" style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 4px; height: fit-content; justify-content: flex-start; width: 100%; flex: 1;">
						<label data-pencil-name="Label Confirm Pass" for="confirmPasswordInput" style="box-sizing: border-box; color: #344054; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; font-size: 11px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;">
							Konfirmasi Kata Sandi Baru
						</label>
						<div data-pencil-name="Input Box Confirm Pass" style="align-items: center; background-color: #ffffff; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: 42px; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 0px 14px; width: 100%;">
							<input type="password" id="confirmPasswordInput" placeholder="Ulangi kata sandi baru" style="box-sizing: border-box; color: #192a3d; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 400; letter-spacing: 0px; line-height: normal; text-align: left; border: none; outline: none; background: transparent; width: 100%; padding: 0;">
						</div>
					</div>
				</div>

			</div>

			<!-- Profile Action Bar Card matching design-reference/profile-user.html -->
			<div data-pencil-name="Profile Action Bar Card" style="align-items: flex-end; background-color: #ffffff; border-radius: 12px; box-sizing: border-box; display: flex; flex-direction: column; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: space-between; outline-offset: -0.5px; outline: 1px solid #dfe3ea; padding: 14px 20px; width: 100%;">
				<div data-pencil-name="Action Buttons Group" style="align-items: flex-start; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 10px; height: fit-content; justify-content: flex-start; width: fit-content;">
					
					<button type="button" id="cancelChangesBtn" data-pencil-name="Cancel Button" style="align-items: flex-start; background-color: #ffffff; border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 0px; height: fit-content; justify-content: flex-start; outline-offset: -0.5px; outline: 1px solid #dfe3ea; border: none; padding: 9px 16px; width: fit-content; cursor: pointer;">
						<span data-pencil-name="Cancel Text" style="box-sizing: border-box; color: #475467; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 600; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;">
							Batalkan
						</span>
					</button>

					<button type="button" id="saveProfileBtn" data-pencil-name="Save Changes Button" style="align-items: center; background-color: #2872fa; border-radius: 8px; box-shadow: 0px 2px 6px #2872fa40; box-sizing: border-box; display: flex; flex-direction: row; flex-shrink: 0; gap: 6px; height: fit-content; justify-content: flex-start; border: none; padding: 9px 20px; width: fit-content; cursor: pointer;">
						<?= icon('check', 'icon-xs'); ?>
						<span data-pencil-name="Save Text" style="box-sizing: border-box; color: #ffffff; font-family: 'Plus Jakarta Sans', system-ui, sans-serif; font-size: 12px; font-style: normal; font-weight: 700; letter-spacing: 0px; line-height: normal; text-align: left; white-space: nowrap;">
							Simpan Perubahan Profil
						</span>
					</button>

				</div>
			</div>

		</div>

	</div>

</div>

<!-- Interactive Client-side Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
	// 1. Password show/hide toggle
	const toggleBtn = document.getElementById('toggleOldPassBtn');
	const oldPassInput = document.getElementById('oldPasswordInput');
	if (toggleBtn && oldPassInput) {
		toggleBtn.addEventListener('click', function () {
			if (oldPassInput.type === 'password') {
				oldPassInput.type = 'text';
				toggleBtn.style.color = 'var(--color-primary, #2872fa)';
			} else {
				oldPassInput.type = 'password';
				toggleBtn.style.color = '#94a3b8';
			}
		});
	}

	// 2. Avatar Photo Upload & Delete Simulation
	const photoInput = document.getElementById('profilePhotoInput');
	const uploadBtn = document.getElementById('uploadPhotoBtn');
	const deleteBtn = document.getElementById('deletePhotoBtn');
	const avatarInitials = document.getElementById('avatarInitials');
	const avatarImg = document.getElementById('avatarImageElement');

	if (uploadBtn && photoInput) {
		uploadBtn.addEventListener('click', function () {
			photoInput.click();
		});

		photoInput.addEventListener('change', function (e) {
			if (e.target.files && e.target.files[0]) {
				const reader = new FileReader();
				reader.onload = function (evt) {
					if (avatarImg) {
						avatarImg.src = evt.target.result;
						avatarImg.style.display = 'block';
					}
					if (avatarInitials) {
						avatarInitials.style.display = 'none';
					}
					if (typeof showToast === 'function') {
						showToast('Foto profil baru berhasil diunggah!', 'success');
					}
				};
				reader.readAsDataURL(e.target.files[0]);
			}
		});
	}

	if (deleteBtn) {
		deleteBtn.addEventListener('click', function () {
			if (avatarImg) {
				avatarImg.src = '';
				avatarImg.style.display = 'none';
			}
			if (avatarInitials) {
				avatarInitials.style.display = 'block';
			}
			if (photoInput) {
				photoInput.value = '';
			}
			if (typeof showToast === 'function') {
				showToast('Foto profil dihapus. Inisial akun ditampilkan.', 'info');
			}
		});
	}

	// 3. Save profile changes
	const saveBtn = document.getElementById('saveProfileBtn');
	const nameInput = document.getElementById('fullNameInput');
	const displayName = document.getElementById('displayNameLabel');

	if (saveBtn) {
		saveBtn.addEventListener('click', function () {
			const newName = nameInput ? nameInput.value.trim() : '';
			if (newName && displayName) {
				displayName.textContent = newName;
			}

			if (typeof showToast === 'function') {
				showToast('Perubahan profil berhasil disimpan!', 'success');
			} else {
				alert('Perubahan profil berhasil disimpan!');
			}
		});
	}

	// 4. Cancel button
	const cancelBtn = document.getElementById('cancelChangesBtn');
	if (cancelBtn) {
		cancelBtn.addEventListener('click', function () {
			window.location.reload();
		});
	}
});
</script>

<style>
@media (max-width: 900px) {
	.profile-main-grid {
		flex-direction: column !important;
	}
	.profile-left-col {
		width: 100% !important;
	}
	.profile-right-col {
		max-width: 100% !important;
		width: 100% !important;
	}
	.profile-two-col-password {
		flex-direction: column !important;
	}
}
</style>
